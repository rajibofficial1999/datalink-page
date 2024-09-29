<?php

namespace App\Core\Router;

use Exception;

class Route
{
    protected array $routes = [];

    public function __construct(string $passedUrl, array $controller, string $method)
    {
        $this->routes[$method][$passedUrl] = $controller;
    }

    public static function get($passedUrl, $controller)
    {
        (new Route($passedUrl, $controller, 'GET'))->dispatch();
    }

    // Define a POST route
    public static function post($passedUrl, $controller)
    {
        (new Route($passedUrl, $controller, 'POST'))->dispatch();
    }

    // Handle the request and dispatch the controller
    public function dispatch()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset($this->routes[$method])) {

            foreach ($this->routes[$method] as $route => $controller) {
                // Convert route pattern to regex, capturing dynamic segments
                $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([a-zA-Z0-9_]+)', $route);
                $pattern = "#^" . $pattern . "$#";

                // Check if the route matches the current URI
                if (preg_match($pattern, $uri, $matches)) {

                    array_shift($matches);

                    // Call the controller action with dynamic parameters
                    return $this->callAction($controller, $matches);
                }
            }
        }
    }

    // Call the controller method with parameters
    protected function callAction($controller, $parameters = [])
    {
        if (!is_array($controller) || count($controller) !== 2) {
            throw new Exception("Syntax error.");
        }

        list($class, $method) = $controller;

        if (class_exists($class) && method_exists($class, $method)) {
            $controller = new $class;

            return call_user_func_array([$controller, $method], $parameters);
        }

        throw new Exception("Controller or method not found.");
    }

    public function __destruct() {}
}
