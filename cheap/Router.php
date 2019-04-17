<?php

namespace Cheap;

class Router {

    protected $routes = [];

    /**
     * Register New Route
     */

    public function add($route, $action, $request_method) {

        $action = explode('@', $action);
        $this->routes[trim($route, '/')] = [
            'controller' => $action[0],
            'method' => $action['1'],
            'request_method' => $request_method
        ];

    }

    public function getRoutes() {

        return $this->routes;

    }


    /**
     * add GET method Route.
     */

    public function get($path, $action) {

        $this->add($path, $action, 'GET');

    }

    /**
     * add POST method Route
     */

    public function post($path, $action) {

        $this->add($path, $action, 'POST');

    }

    public function parseURL() {
        // TODO
    }

}