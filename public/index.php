<?php

include __DIR__."/../Router.php";

$routes = include __DIR__."/../routes.php";
$request = $_SERVER['REQUEST_URI'];

$router = new Router($request);
$router->run($routes);





