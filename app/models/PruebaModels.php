<?php

namespace App\Models;

use Core\AbstractModel;

class PruebaModels extends AbstractModel
{
    protected $table = 'prueba'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id'; // Clave primaria de la tabla

    public function getAll() {}

    public function save($data) {}

    public function delete($id) {}

    public function find($id) {}
}
