<?php

$router->get('', 'WelcomeController@welcome');
$router->get('blog/{year}/{month}/{day}', 'WelcomeController@testParams');
$router->get('callback/{parameter}', function($parameter) {
    echo $parameter;
});