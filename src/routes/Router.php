<?php

namespace src\Routes;

class Response {
    public function send($body){
        echo $body;
    }
    public function json($body){
        header('Content-Type: application/json');
        echo json_encode($body);
    }
    public function status($status){
        http_response_code($status);
    }
}

class Router {
    private $routes = [];

    public function get($route, $controller) {
        $this->addRoute('GET', $route, $controller);
    }

    public function post($route, $controller) {
        $this->addRoute('POST', $route, $controller);
    }

    public function put($route, $controller) {
        $this->addRoute('PUT', $route, $controller);
    }

    public function delete($route, $controller) {
        $this->addRoute('DELETE', $route, $controller);
    }

    public function use($router) {
        foreach ($router->routes as $route) {
            $this->routes[] = $route;
        }
    }

    private function addRoute($method, $route, $controller) {
        $this->routes[] = [
            'method' => $method,
            'route' => $route,
            'controller' => $controller
        ];
    }

    public function dispatch($method, $uri) {
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['route'] === $uri) {
                $controller = $route['controller'];
                $controller($this->getRequestDetails(), $this->getResponseDetails());
                return;
            }
        }
        $this->defaultResponse();
    }

    private function getRequestDetails() {
        return [
            'method' => $_SERVER['REQUEST_METHOD'],
            'uri' => $_SERVER['REQUEST_URI'],
            'params' => $_REQUEST
        ];
    }

    private function getResponseDetails() {
        return new Response();
    }

    private function defaultResponse() {
        http_response_code(404);
        echo "404 Not Found";
    }
}
