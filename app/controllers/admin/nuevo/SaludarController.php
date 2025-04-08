<?php 
namespace App\Controllers\Saludo\Nuevo;

class SaludarController {
    public function saludo() {
        echo "¡Hola desde el controlador SaludoController!";
    }

    public function otroMetodo() {
        echo "Este es otro método en el controlador SaludoController.";
    }
}