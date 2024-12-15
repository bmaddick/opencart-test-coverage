<?php

require_once __DIR__ . '/../../vendor/autoload.php';

// Register Tools namespace for PHPStan extensions
spl_autoload_register(function ($class) {
    if (strpos($class, 'Tools\\PHPStan\\') === 0) {
        $file = __DIR__ . '/' . str_replace('\\', '/', substr($class, strlen('Tools\\PHPStan\\'))) . '.php';
        if (file_exists($file)) {
            require_once $file;
            return true;
        }
    }
    return false;
});
