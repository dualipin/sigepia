<?php
require_once __DIR__.'/core/Config.php';
require_once __DIR__ . '/core/Router.php';

$route = INITIAL_ROUTE;

echo $route;
echo "<br>";

$router = new Router();
$router->dispatch($route);