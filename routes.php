<?php

$router->get('', 'ExampleController@welcome');
$router->get('param/{year}/{month}/{day}', 'ExampleController@example');