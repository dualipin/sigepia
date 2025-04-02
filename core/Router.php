<?php
/**
 * Clase Router
 *
 * Esta clase maneja el enrutamiento de la aplicación web. Su propósito es analizar la URL solicitada,
 * determinar el controlador y método apropiados, y ejecutar dicho método con los parámetros proporcionados.
 * 
 * Métodos principales:
 * - dispatch(): Realiza el análisis de la URL, localiza el controlador y método correspondiente, 
 *   y los ejecuta con los parámetros adecuados.
 *
 * Detalles de implementación:
 * - La URL se divide en segmentos utilizando '/' como delimitador.
 * - El primer segmento se utiliza para determinar el controlador.
 * - El segundo segmento se utiliza para determinar el método del controlador.
 * - Los segmentos restantes se consideran parámetros para el método.
 * - Si no se proporciona un controlador o método, se utilizan valores predeterminados:
 *   - Controlador predeterminado: HomeController
 *   - Método predeterminado: index
 * - Soporta la búsqueda de controladores en subcarpetas dentro de la carpeta de controladores.
 *
 * Manejo de errores:
 * - Si el archivo del controlador no existe, se muestra un mensaje de error indicando que el controlador no fue encontrado.
 * - Si la clase del controlador no existe, se muestra un mensaje de error indicando que la clase no fue encontrada.
 * - Si el método del controlador no existe, se muestra un mensaje de error indicando que el método no fue encontrado.
 *
 * Ejemplo de uso:
 * - URL: /productos/ver/123
 *   - Controlador: ProductosController
 *   - Método: ver
 *   - Parámetros: [123]
 *
 * Requisitos:
 * - Los controladores deben estar ubicados en la carpeta "../app/controllers/".
 * - Los nombres de los controladores deben seguir el formato: NombreController.php.
 * - Los controladores deben estar dentro del espacio de nombres "App\Controllers" o sus subespacios de nombres.
 */
class Router
{
    /**
     * Proporciona el enrutamiento de la aplicación web.
     * 
     * Este método analiza la URL solicitada, determina el controlador y método apropiados,
     * y ejecuta dicho método con los parámetros proporcionados.
     * 
     * @param string $initialRoute La ruta inicial para eliminar de la URL.
     * @return void
     */
    public function dispatch($initialRoute = "/")
    {
        $route = trim($initialRoute, "/");

        // Normalizar la ruta inicial
        if (empty($route)) {
            $route = "/";
        } elseif (substr($route, -1) !== '/') {
            $route .= '/';
        }
        if (substr($route, 0, 1) !== '/') {
            $route = '/' . $route;
        }

        // Procesar la URI solicitada
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = trim($uri, "/");
        if (!empty($route) && strpos($uri, trim($route, "/")) === 0) {
            $uri = substr($uri, strlen(trim($route, "/")));
        }
        $segments = array_filter(explode('/', trim($uri, "/")));

        // Controlador y método predeterminados
        $namespace = "App\\Controllers";
        $method = !empty($segments) ? array_pop($segments) : 'index';
        $controllerName = !empty($segments) ? ucfirst(array_pop($segments)) . 'Controller' : 'HomeController';
        $parameters = $segments;

        // Asegurarse de que el método predeterminado sea 'index' si está vacío
        if (empty($method)) {
            $method = 'index';
        }

        // Construir la ruta del controlador
        $controllerPath = "./app/controllers";
        foreach ($segments as $folder) {
            $controllerPath .= '/' . $folder;
            $namespace .= '\\' . ucfirst($folder);
        }
        $controllerPath .= "/$controllerName.php";

        // Clase completamente calificada del controlador
        $controllerClass = "$namespace\\$controllerName";

        // Validar y ejecutar el controlador
        if (file_exists($controllerPath)) {
            require_once $controllerPath;
            if (class_exists($controllerClass)) {
                $controllerInstance = new $controllerClass();
                if (method_exists($controllerInstance, $method)) {
                    call_user_func_array([$controllerInstance, $method], $parameters);
                } else {
                    echo "Error: Método no encontrado ($method)";
                }
            } else {
                echo "Error: Clase del controlador no encontrada ($controllerClass)";
            }
        } else {
            echo "Error: Controlador no encontrado ($controllerPath)";
        }
    }
}
