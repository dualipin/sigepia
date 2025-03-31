<?php

namespace App\Controllers;

use NoticiasModel;

require_once __DIR__ . '/../models/NoticiasModel.php';

class NoticiasController
{
    private $noticiasModel;

    public function __construct()
    {
        $this->noticiasModel = new NoticiasModel();
    }

    public function latest()
    {
        $noticias = $this->noticiasModel->getLatestNoticia();

        if (!$noticias) {
            http_response_code(404);
            echo json_encode(['message' => 'No hay noticias disponibles.']);
            return;
        }
        header('Content-Type: application/json');
        echo json_encode($noticias);
    }
}
