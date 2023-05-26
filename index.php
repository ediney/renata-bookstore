<?php

include './app/Controllers/BookController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        include './src/views/home.php';
    break;

    case '/books':
        BookController::index();
    break;

    default:
        echo "Error 404";
    break;
}