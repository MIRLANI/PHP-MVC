<?php

use Lani\BelajarPhpMvc\App\Router;
use Lani\BelajarPhpMvc\Controller\HomeController;

require_once  __DIR__ . "/../vendor/autoload.php";


Router::add("GET", "/", HomeController::class, "index");
Router::add("GET", "/hello", HomeController::class, "hello");
Router::add("GET", "/world", HomeController::class, "world");
Router::add("GET", "/about", HomeController::class, "about");


Router::run();


?>