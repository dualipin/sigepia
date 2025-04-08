<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        if(!isset($_SESSION['user'])) {
            header('Location: ' . INITIAL_ROUTE . '/auth/login/');
            exit;
        }
        $this->render('Home', 'AppLayout');
    }
    public function saludo()
    {
        echo "¡Hola desde el controlador HomeController!, tu sesión es: " . ($_SESSION['user']['name'] ?? 'no establecida');
    }
}
