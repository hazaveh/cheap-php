<?php

$router->get('', 'WelcomeController@welcome');
$router->get('blog/{year}/{month}/{day}', 'WelcomeController@testParams');