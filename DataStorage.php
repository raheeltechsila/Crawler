<?php
// Data Storage Class
class DataStorage {
    public static function saveResults($data) {
        file_put_contents('results.json', json_encode($data, JSON_PRETTY_PRINT));
    }
}
