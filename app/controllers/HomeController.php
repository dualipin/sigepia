<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->render('Home');
    }
    public function saludo()
    {
        echo "¡Hola desde el controlador HomeController!, tu sesión es: " . ($_SESSION['user'] ?? 'no establecida');
    }
}
