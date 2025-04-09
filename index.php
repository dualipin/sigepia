<?php
require_once __DIR__ . '/core/Config.php';
require_once __DIR__ . '/core/Router.php';
require_once __DIR__ . '/core/Controller.php';
require_once __DIR__ . '/core/Database.php';
require_once __DIR__ . '/core/AbstractModel.php';


function cargarVariablesEntorno($ruta)
{
    if (!file_exists($ruta)) return;

    $lineas = file($ruta, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lineas as $linea) {
        $linea = trim($linea);
        if ($linea === '' || str_starts_with($linea, '#')) continue;
        list($nombre, $valor) = explode('=', $linea, 2);

        // Definir en $_ENV
        $_ENV[$nombre] = trim($valor);
    }
}

// Cargar archivo .env
cargarVariablesEntorno(__DIR__ . '/.env');

define('DB_HOST', $_ENV['DB_HOST'] ?? 'localhost');
define('DB_NAME', $_ENV['DB_NAME'] ?? 'sigepia');
define('DB_USER', $_ENV['DB_USER'] ?? 'root');
define('DB_PASS', $_ENV['DB_PASS'] ?? 'dualipin');


$route = INITIAL_ROUTE;

$router = new Router();
$router->dispatch($route);
//hOLA PUTOS
