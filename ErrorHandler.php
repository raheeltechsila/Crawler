<?php
// Error Handling Class
class ErrorHandler {
    public static function handle($message) {
        Logger::error("Error: " . $message);
    }
}
