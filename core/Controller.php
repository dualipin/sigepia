<?php

class Controller{
    public function view($view, $data = []){
        extract($data); // arreglo a variables
        require_once "../app/views/$view.php";
    }
}