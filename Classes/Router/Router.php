<?php

namespace Classes\Router;

class Router 
{
    private array $routes;
    public function register(string $path, callable $action): void
    {
        $this->routes[$path] = $action;
    }
}