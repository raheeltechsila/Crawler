<?php
// File Utility Class for managing directories and file paths
class FileUtil {
    public static function createDirIfNotExists($dir) {
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
    }
}
