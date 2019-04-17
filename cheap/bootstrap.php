<?php
use Cheap\Router;

$router = new Router;

require_once __DIR__.'/../routes.php';

var_dump($router->getRoutes());