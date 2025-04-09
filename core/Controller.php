<?php

namespace Core;

/**
 * Controlador base para la aplicación.
 * 
 * @package Core
 */

class Controller
{
    public function render($view, $layout = 'AppLayout', $data = [])
    {
        // Aquí puedes implementar la lógica para renderizar la vista
        // y el layout correspondiente.
        // Por ejemplo, podrías incluir el archivo de la vista y pasarle los datos.
        extract($data);
        $view = __DIR__ . "/../app/views/$view.php";
        include_once __DIR__ . "/../app/views/layout/$layout.php";
    }
}
