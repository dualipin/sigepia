<?php

namespace App\Controllers\Botellas;

use Core\Controller;

class PlasticoController extends Controller
{
    private function actualizar($id)
    {
        return "Id asdasdas" . $id;
    }

    public function saludo()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];

            echo json_encode(["nombre" => $nombre]);
        } else {
            header('Location: /');
        }
    }


    public function botar()
    {
        $id = $_GET['id'] ?: 'no id';

        $this->render('botellas/Plastico', data: [
            "identificador" => $this->actualizar($id)
        ]);
    }
}
