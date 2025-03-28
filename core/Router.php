<?php

class Router
{
    public function dispatch($url)
    {
        $url = trim($url, '/');
        // Si la URL está vacía, usamos HomeController@index
        if ($url === '') {
            $controllerName = 'HomeController';
            $method = 'index';
        } else {
            // Separar la URL por "/"
            $parts = explode('/', $url);
            $controllerName = ucfirst($parts[0]) . 'Controller';
            $method = isset($parts[1]) ? $parts[1] : 'index';
        }

        // Verificar si el controlador existe
        $controllerFile = "../app/controllers/$controllerName.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName();
            if (method_exists($controller, $method)) {
                $controller->$method();
            } else {
                echo "Error: Método no encontrado.";
            }
        } else {
            echo "Error: Página no encontrada.";
        }
    }
}
