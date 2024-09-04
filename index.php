<?php
header("Access-Control-Allow-Origin: *"); // Adjust this to your domain for production
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Referrer-Policy: strict-origin-when-cross-origin");

// Handle preflight requests (OPTIONS method)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit;
}


require_once 'vendor/autoload.php';

use Ig\IgPro\Controller\StudentController;

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    $std = new StudentController();
    $std->index();
} else if ($uri === '/check-email-availability/') {
    $std = new StudentController();
    $std->checkEmailAvailability();
} else if ($uri === '/create-std-application/') {
    $std = new StudentController();
    $std->createStudent();
}