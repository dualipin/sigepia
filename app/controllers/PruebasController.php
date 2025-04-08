<?php

namespace App\Controllers;

use Core\Controller;


class PruebasController extends Controller
{
    public function index()
    {
        $this->render('pruebas/piloto', data: [
            'titulo' => 'Prueba Piloto',
            'nombre' => 'Hola Perla',
        ]);
    }
}
