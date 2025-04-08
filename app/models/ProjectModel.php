<?php

namespace App\Models;

use Core\AbstractModel;

class ProjectModel extends AbstractModel
{

    public function getAll()
    {
        return [[
            'id' => 1,
            'name' => 'Project 1',
            'description' => 'Description of project 1',
            'created_at' => date('Y-m-d H:i:s'),
        ]];
    }

    public function save($data)
    {
        // Implement logic to save a record
    }

    public function delete($id)
    {
        // Implement logic to delete a record by ID
    }

    public function find($id)
    {
        // Implement logic to find a record by ID
    }
}
