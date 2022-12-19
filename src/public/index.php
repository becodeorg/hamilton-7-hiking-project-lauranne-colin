<?php
declare(strict_types=1);

session_start();

require 'vendor/autoload.php';

$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
// $method = $_SERVER['REQUEST_METHOD'];


if ($url === '/' || $url === '') {
    $hikeController = new HikeController();
    $hikeController->index();
}

if ($url === 'hike') {
    $codeTwo = $_GET['codeTwo'];
    $hikeController = new HikeController();
    $hikeController->show($codeTwo);
}

if ($url === 'debug') {
    var_dump($_SERVER);
}
