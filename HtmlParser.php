<?php
// HTML Parser Class for Images and Links
class HtmlParser {
    public static function extractImages($html) {
        preg_match_all('/<img src="([^"]+)"/', $html, $matches);
        return array_unique($matches[1]);
    }
}
