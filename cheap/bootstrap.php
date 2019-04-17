<?php
use Cheap\Router;
use Cheap\Request; 

require_once 'helpers.php';

$router = new Router;

require_once __DIR__.'/../routes.php';

$router->parseUri(Request::uri());