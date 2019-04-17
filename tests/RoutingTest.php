<?php
namespace UnitTestFiles\Test;

use Tests\TestCase;

class RoutingTest extends TestCase
{
    public function testAddRoute() {
        
        $this->router->get('/', 'WelcomeController@welcome');

        $response = $this->httpClient->request('GET', '/');

        $this->assertEquals(200, $response->getStatusCode());

        $this->assertStringContainsString("CHEAP", $response->getBody()->getContents());

    }

    public function testParameters() {

        $this->router->get('blog/{year}/{month}/{day}', 'WelcomeController@testParams');

        $sample = [
            'year'  => '2019',
            'month' => '01',
            'day'   => '09'
        ];

        $response = $this->httpClient->request('GET', 'blog/2019/01/09');

        $this->assertEquals($sample, json_decode($response->getBody(), true));

    }
}
