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
        if (strpos(trim($linea), '#') === 0) continue; // Saltar comentarios
        list($nombre, $valor) = explode('=', $linea, 2);
        putenv(trim($nombre) . '=' . trim($valor));
    }
}

// Cargar archivo .env
cargarVariablesEntorno(__DIR__ . '/.env');

// Ahora podés usar getenv()
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_NAME', getenv('DB_NAME') ?: 'sigepia');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: 'dualipin');


$route = INITIAL_ROUTE;

$router = new Router();
$router->dispatch($route);
