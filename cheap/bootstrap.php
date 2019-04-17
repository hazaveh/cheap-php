<?php
use Cheap\Router;
use Cheap\Request; 

$router = new Router;

require_once __DIR__.'/../routes.php';

$router->parseUri(Request::uri());