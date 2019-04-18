<?php

namespace Cheap;

use Cheap\Request;

class Router {

    protected $routes = [];

    /**
     * Register New Route
     */

    public function add($route, $action, $request_method) {

        if (is_callable($action)) {

            $controller = null;

            $method = $action;

        } else {
            
            $action = explode('@', $action);
            
            $controller = $action[0];

            $method = $action[1];

        }

        $this->routes[] = [
            'path' => trim($route, '/'),
            'controller' => $controller,
            'method' => $method,
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

    /**
     * Parse incoming request, match it with a route and extract the paremeters. 
     * @param string $uri
     * @return fun
     */

    public function parseUri($uri) {

        foreach ($this->routes as $route) {

            $pattern = '@^' . preg_replace('@{(\w+)*}@', '(\w+)*', $route['path']) . '$@';

            if (preg_match($pattern, $uri)) {

                if (Request::method() != $route['request_method']) {
                    throw new \Exception("method " . Request::method() . " not allowed");
                }

                // a little parameter processing.
                $routeParts = explode('/', $route['path']);

                $urlParts = explode('/', $uri);

                $variables = [];

                foreach ($routeParts as $index => $value) {
                    if (strpos($value, '{') !== FALSE) {
                        $variables[trim($routeParts[$index], '{}')] = $urlParts[$index]; 
                    }
                }
                
                // There is no controller, we execute the callback function provided to the route.
                if (!$route['controller']) {
                    return call_user_func_array($route['method'], $variables);
                }

                // lets process. 
                return $this->direct($route['controller'], $route['method'], $variables);
                
            }
        }
        
        // Maybe in future some RouteNotFoundException?
        throw new \Exception("route not found.");

    }


    public function direct($controller, $method, $parameters = []) {
 
        $controller =  'App\\Controllers\\' . $controller;

        $controller = new $controller;

        if (!method_exists($controller, $method)) {
            throw new \Exception("method $method does not exist");
        }

        call_user_func_array([$controller, $method], $parameters);

    }

    public function returnCallback($callback) {



    }


}