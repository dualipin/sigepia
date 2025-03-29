<?php

/**
 * Esta clase maneja el enrutamiento de la aplicación.
 * Analiza la URL, determina el controlador y método apropiados,
 * y los invoca con los parámetros proporcionados.
 */
class Router
{
    public function dispatch($url)
    {
        // Eliminar la barra inicial y dividir la URL en segmentos
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        $segmentos = explode('/', $uri);

        // Si la URL está vacía, redirigir a la página de inicio
        $espacioDeNombres = "App\\Controllers";
        $nombreControlador = !empty($segmentos[0]) ? ucfirst($segmentos[0]) : 'Home';
        $metodo = $segmentos[1] ?? 'index';
        $parametros = array_slice($segmentos, 2);

        // Soporte para subcarpetas (módulos)
        $rutaControlador = "../app/controllers/$nombreControlador.php";

        // Verificar si el controlador existe en la carpeta raíz
        if (!file_exists($rutaControlador) && isset($segmentos[1])) {
            // Si no existe, verificar si el controlador está en una subcarpeta
            $espacioDeNombres .= "\\" . ucfirst($segmentos[0]);
            // Construir la ruta del controlador en la subcarpeta
            $nombreControlador = ucfirst($segmentos[1]);
            // Verificar si el controlador existe en la subcarpeta
            $rutaControlador = "../app/controllers/$segmentos[0]/$nombreControlador.php";
            // Si no existe, usar el controlador por defecto
            $metodo = $segmentos[2] ?? 'index';
            $parametros = array_slice($segmentos, 3);
        }

        // Verificar si el controlador existe en la carpeta raíz
        $claseControlador = "$espacioDeNombres\\$nombreControlador";

        // Verificar si el controlador existe y cargarlo    
        if (file_exists($rutaControlador)) {
            require_once $rutaControlador;
            if (class_exists($claseControlador)) {
                $instanciaControlador = new $claseControlador();
                if (method_exists($instanciaControlador, $metodo)) {
                    call_user_func_array([$instanciaControlador, $metodo], $parametros);
                } else {
                    echo "Error: Método no encontrado ($metodo)";
                }
            } else {
                echo "Error: Clase de controlador no encontrada ($claseControlador)";
            }
        } else {
            echo "Error: Controlador no encontrado ($rutaControlador)";
        }
    }
}
