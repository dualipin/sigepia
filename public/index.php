<?php

require_once '../core/Router.php';
require_once '../config/config.php';

// Reconocer la URL de la petición
$url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';


// Se despacha la ruta, siempre que coincida con el controlador y el método
$router = new Router();
$router->dispatch($url);