<?php
namespace App\Controllers;

class HomeController{
    public function index(){
        echo "Hola desde el controlador HomeController";
    }

    public function otroMetodo(){
        echo "Este es otro método en el controlador HomeController.";
    }
}