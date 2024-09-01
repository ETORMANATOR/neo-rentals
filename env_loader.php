<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

// Populate $_ENV with the loaded environment variables
foreach ($_SERVER as $key => $value) {
    $_ENV[$key] = $value;
}