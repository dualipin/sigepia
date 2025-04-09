<?php

require_once 'model/ProcesoModel.php';

class ProcesoController {

    private $model;

    public function __construct() {
        $this->model = new ProcesoController();
    }

    // Muestra el formulario y los datos guardados
    public function mostrar() {
        $procesos = $this->model->obtenerTodos();
        include 'view/registro_view.php';
    }

    // Guarda los datos del formulario
    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $datos = [
                'nombre'         => $_POST['nombre'],
                'fecha'          => $_POST['fecha'],
                'responsable'    => $_POST['responsable'],
                'equipo'         => $_POST['equipo'],
                'producto'       => $_POST['producto'],
                'procedimiento'  => $_POST['procedimiento'],
                'pesado_entrada' => $_POST['pesado_entrada'],
                'pesado_salida'  => $_POST['pesado_salida'],
                'pesado_unidad'  => $_POST['pesado_unidad'],
                'tamizado_entrada' => $_POST['tamizado_entrada'],
                'tamizado_salida'  => $_POST['tamizado_salida'],
                'tamizado_unidad'  => $_POST['tamizado_unidad'],
                'coccion_entrada' => $_POST['coccion_entrada'],
                'coccion_salida'  => $_POST['coccion_salida'],
                'coccion_unidad'  => $_POST['coccion_unidad'],
                'pelado_entrada'  => $_POST['pelado_entrada'],
                'pelado_salida'   => $_POST['pelado_salida'],
                'pelado_unidad'   => $_POST['pelado_unidad'],
            ];

            $this->model->guardar($datos);
            header('Location: index.php');
            exit();
        }
    }

    // Consulta específica por nombre de prueba (opcional)
    public function consultar($nombreBusqueda) {
        $resultado = $this->model->buscarPorNombre($nombreBusqueda);
        include 'view/registro_view.php';
    }
}

