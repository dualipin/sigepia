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
 * - Se soporta la búsqueda de controladores en subcarpetas dentro de la carpeta de controladores.
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
     * Proveer el enrutamiento de la aplicación web.
     * 
     * Este método analiza la URL solicitada, determina el controlador y método apropiados,
     * y ejecuta dicho método con los parámetros proporcionados.
     * 
     * @param string $initialRoute La ruta inicial para eliminar de la URL.
     * @return void
     */
    public function dispatch($initialRoute = "/")
    {


        // Elimina la barra inicial y divide la URL en segmentos
        $uri = trim($_SERVER['REQUEST_URI'], "$initialRoute");
        $segments = explode('/', $uri);

        // Si la URL está vacía, redirige a la página de inicio
        $namespace = "App\\Controllers";
        $controllerName = !empty($segments[0]) ? ucfirst($segments[0]) . 'Controller' : 'HomeController';
        $method = $segments[1] ?? 'index';
        $parameters = array_slice($segments, 2);

        // Construye la ruta del controlador
        $controllerPath = "../app/controllers/$controllerName.php";

        // Verifica si el controlador existe en la carpeta raíz
        if (!file_exists($controllerPath) && isset($segments[1])) {
            // Si no existe, verifica si el controlador está en una subcarpeta
            $namespace .= "\\" . ucfirst($segments[0]);

            // Construye la ruta del controlador en la subcarpeta
            $controllerName = ucfirst($segments[1]) . 'Controller';
            $controllerPath = "../app/controllers/{$segments[0]}/$controllerName.php";

            // Actualiza el método y los parámetros
            $method = $segments[2] ?? 'index';
            $parameters = array_slice($segments, 3);
        }

        // Construye el nombre completo de la clase del controlador
        $controllerClass = "$namespace\\$controllerName";

        // Verifica si el controlador existe y lo carga
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
