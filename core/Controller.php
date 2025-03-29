<?php

/**
 * Clase base para todos los controladores
 */
class Controller{
    public function view($view, $data = []){
        extract($data); // arreglo a variables
        require_once "../app/views/$view.php"; // cargar la vista
    }
}