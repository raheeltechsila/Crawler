<?php
// Image Downloader Class
class ImageDownloader {
    public static function download($url) {
        $imageData = @file_get_contents($url);
        if ($imageData === false) {
            Logger::error("Failed to download image: $url");
            return;
        }
        $fileName = 'assets/' . basename($url);
        file_put_contents($fileName, $imageData);
        Logger::log("Downloaded image: $fileName");
    }
}
