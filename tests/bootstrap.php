<?php

// Define OpenCart system constants
define('DIR_OPENCART', dirname(__DIR__) . '/upload/');
define('DIR_SYSTEM', DIR_OPENCART . 'system/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', DIR_OPENCART . 'catalog/');

// Include OpenCart's autoloader
require_once(DIR_SYSTEM . 'engine/autoloader.php');

// Initialize OpenCart's autoloader
$autoloader = new \Opencart\System\Engine\Autoloader();

// Register core OpenCart namespaces
$autoloader->register('Opencart\Catalog', DIR_CATALOG);
$autoloader->register('Opencart\System', DIR_SYSTEM);

// Include Composer's autoloader
require_once(__DIR__ . '/../vendor/autoload.php');
