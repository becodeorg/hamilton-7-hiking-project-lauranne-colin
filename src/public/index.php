<?php
declare(strict_types=1);

session_start();

require 'vendor/autoload.php';
require_once 'config.php';

$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
 $method = $_SERVER['REQUEST_METHOD'];


if ($url === '/' || $url === '') {
    $hikeController = new HikeController();
    $hikeController->index();
    $tagController = new TagController();
    $tagController->tagwhere();
}

if ($url === 'hike') {
    $code = $_GET['code'];
    $hikeController = new HikeController();
    $hikeController->show($code);
}
if( $url === 'tagName'){
    $codeTag= $_GET['codeTag'];
    $tagController= new TagController();
    $tagController->showTag($codeTag);
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
