<?php
// Logger Class
class Logger {
    public static function log($message) {
        file_put_contents('log.txt', date("[Y-m-d H:i:s] ") . $message . PHP_EOL, FILE_APPEND);
    }

    public static function error($message) {
        file_put_contents('log.txt', date("[Y-m-d H:i:s] ERROR: ") . $message . PHP_EOL, FILE_APPEND);
    }
}
