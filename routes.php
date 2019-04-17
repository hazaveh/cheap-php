<?php

$router->get('', 'ExampleController@index');
$router->get('hello', 'ExampleController@hello');
$router->get('param/:hello', 'ExampleController@hello');
$router->get('param/{year}/{month}/{day}', 'ExampleController@hello');