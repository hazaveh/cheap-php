<?php

namespace Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Cheap\Router;
use GuzzleHttp\Client;

abstract class TestCase extends BaseTestCase
{

    public $router;
    public $httpClient;

    protected function setUp(): void
    {
        $this->router = new Router;

        $this->httpClient = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:8000',
            // You can set any number of default request options.
            'timeout'  => 3.0,
            'verify' => false
        ]);
    }

}