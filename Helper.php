<?php
// Helper Class with utility functions
class Helper {
    public static function sanitizeUrl($url) {
        return filter_var($url, FILTER_SANITIZE_URL);
    }
}
