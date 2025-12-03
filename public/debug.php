<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);
chdir(FCPATH);

require __DIR__ . '/../app/Config/Paths.php';
$paths = new Config\Paths();

echo "Paths OK\n";

require $paths->systemDirectory . '/Boot.php';

echo "Boot loaded\n";

try {
    CodeIgniter\Boot::bootWeb($paths);
} catch (Throwable $e) {
    echo "\n=== ERROR ===\n";
    echo get_class($e) . ": " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . "\n";
    echo "Line: " . $e->getLine() . "\n";
    echo "\nTrace:\n";
    echo $e->getTraceAsString();
}
