<?php
// Main Crawler Script

require 'Logger.php';
require 'config.php';
require 'HtmlFetcher.php';
require 'UrlParser.php';
require 'HtmlParser.php';
require 'ImageDownloader.php';
require 'ButtonClicker.php';
require 'DataStorage.php';

Logger::log("Starting the crawler...");
$websites = include 'config.php';
$crawlerData = [];

foreach ($websites as $website) {
    Logger::log("Crawling: $website");
    $html = HtmlFetcher::fetch($website);
    
    if (!$html) {
        Logger::error("Failed to fetch $website");
        continue;
    }
    
    // Parse links and images
    $urls = UrlParser::extractUrls($html);
    $images = HtmlParser::extractImages($html);
    ButtonClicker::simulateClick($html);
    
    // Download images
    foreach ($images as $image) {
        ImageDownloader::download($image);
    }

    // Store the data
    $crawlerData[$website] = ['urls' => $urls, 'images' => $images];
    Logger::log("Crawled $website successfully.");
}

DataStorage::saveResults($crawlerData);
Logger::log("Crawling complete. Check 'results.json' for output.");
