<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

echo "PHP Version: " . PHP_VERSION . "\n";
echo "Testing CodeIgniter...\n";

// Check if vendor/autoload.php exists
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    echo "✓ Composer autoload found\n";
    require __DIR__ . '/vendor/autoload.php';
} else {
    echo "✗ Composer autoload NOT found\n";
    exit(1);
}

// Check if Config\Paths exists
if (file_exists(__DIR__ . '/app/Config/Paths.php')) {
    echo "✓ Paths config found\n";
} else {
    echo "✗ Paths config NOT found\n";
    exit(1);
}

// Check .env
if (file_exists(__DIR__ . '/.env')) {
    echo "✓ .env file found\n";
} else {
    echo "✗ .env file NOT found\n";
}

echo "\nAll basic checks passed!\n";
echo "Try running: php spark serve\n";
