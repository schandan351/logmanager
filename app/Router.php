<?php

namespace App;

class Router
{
    public $routes = [];
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function update($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function delete($uri, $controller)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return ($this->routes[$requestType][$uri]);
        }
    }
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return ($this->routes[$requestType][$uri]);
        }
    }
}
