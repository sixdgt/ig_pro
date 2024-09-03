<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

return [
    'db_host' => $_ENV['DB_HOST'],
    'db_name' => $_ENV['DB_NAME'],
    'db_user' => $_ENV['DB_USER'],
    'db_password' => $_ENV['DB_PASSWORD'],
];
