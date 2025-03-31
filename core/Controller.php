<?php

namespace Core;

/**
 * Clase base para todos los controladores.
 *
 * Esta clase sirve como punto de partida para la creación de controladores
 * en la aplicación. Proporciona métodos y propiedades comunes que pueden
 * ser utilizados o sobrescritos por las clases derivadas.
 */
class Controller
{
    /**
     * Carga una vista y le pasa los datos necesarios
     *
     * @param string $view Nombre de la vista a cargar
     * @param array $data Datos a pasar a la vista
     */
    public function view($view, $data = [])
    {
        extract($data); // arreglo a variables
        require_once "../app/views/$view.php"; // cargar la vista
        require_once '../app/views/layouts/MainLayout.php'; // cargar el layout
    }
}
