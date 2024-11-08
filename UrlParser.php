<?php
// URL Parser Class
class UrlParser {
    public static function extractUrls($html) {
        preg_match_all('/<a href="([^"]+)"/', $html, $matches);
        return array_unique($matches[1]);
    }
}
