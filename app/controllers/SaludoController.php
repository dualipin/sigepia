<?php
namespace App\Controllers;

use Core\Controller;

class SaludoController extends Controller
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['nombre'])) {
                echo json_encode($_POST['nombre']);
            } else {
                echo json_encode('No se ha enviado el nombre');
            }
        } else {
            $this->view('SaludoView');
        }
    }
}
