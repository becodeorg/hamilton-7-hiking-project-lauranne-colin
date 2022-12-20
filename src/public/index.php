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




if ($url === 'logout') {
    $authController  = new AuthController();
    $authController->logout();
}
if ($url === 'login') {
    $authController = new AuthController();

    if ($method === 'GET') {
        $authController->showLoginForm();
    }

    if ($method === 'POST') {
        $authController->login($_POST);
    }
}

if ($url === 'registration') {
    $authController = new AuthController();

    if ($method === 'GET') {
        $authController->showRegistrationForm();
    }

    if ($method === 'POST') {
        $authController->register($_POST);
    }
}
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./index.css" rel="stylesheet">
</head>