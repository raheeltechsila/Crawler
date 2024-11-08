<?php
// HTML Fetcher Class
class HtmlFetcher {
    public static function fetch($url) {
        return @file_get_contents($url);
    }
}
