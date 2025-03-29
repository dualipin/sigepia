<?php

class Router
{
    public function dispatch($url)
    {
        // Eliminar el prefijo de la URL (si existe)
        $url = trim($url, '/');
        // Si la URL está vacía, usamos HomeController@index
        if ($url === '') {
            // Redirigir a la página de inicio
            $controllerName = 'HomeController';

            // Método por defecto
            $method = 'index';
        } else {
            // Separar la URL por "/"
            $parts = explode('/', $url);

            // Asignar el controlador y el método
            $controllerName = ucfirst($parts[0]) . 'Controller';

            // Si no se especifica el método, se usa "index" por defecto
            $method = isset($parts[1]) ? $parts[1] : 'index';
        }

        // Verificar si el controlador existe
        $controllerFile = "../app/controllers/$controllerName.php";

        if (file_exists($controllerFile)) {
            // Incluir el archivo del controlador y crear una instancia
            require_once $controllerFile;
            $controller = new $controllerName();

            // Verificar si el método existe en el controlador
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
