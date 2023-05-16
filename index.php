<?php

use Lani\BelajarPhpMvc\App\Router;

require_once  __DIR__ . "/../vendor/autoload.php";


Router::add("GET", "/", "HomeControler", "index");
Router::add("GET", "/login", "UserControler", "login");
Router::add("GET", "/register", "UserControler", "Register");

Router::run();


?>