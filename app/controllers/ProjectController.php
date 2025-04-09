<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\ProjectModel;

require_once __DIR__ . '/../models/ProjectModel.php';

class ProjectController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new ProjectModel();
    }

    public function index()
    {
        $projects = $this->model->getAll();
        return $this->view('projects/index', ['projects' => $projects]);
    }

    public function list()
    {
        $projects = [];
        header('Content-Type: application/json');

        if (isset($_GET['active'])) {
            $projects = [
                [
                    "name" => "Mermelada",
                    "description" => "Mermelada de mora",
                    "status" => "active",
                    "type" => "personal",
                ]
            ];
        } else if (isset($_GET['inactive'])) {
            $projects = [
                [
                    "name" => "Mermelada",
                    "description" => "Mermelada de mora",
                    "status" => "inactive",
                    "type" => "personal",
                ]
            ];
        } else {
            $projects = [
                [
                    "name" => "Mermelada",
                    "description" => "Mermelada de mora",
                    "status" => "active",
                    "type" => "personal",
                ],
                [
                    "name" => "Jugo",
                    "description" => "Jugo de naranja",
                    "status" => "inactive",
                    "type" => "personal",
                ]
            ];
        }

        echo json_encode($projects);
    }


    public function create_team(){
        $data = $_POST;
        $team = [
            'name' => $data['name'],
            'description' => $data['description'],
            'goals' => explode(',', $data['goals']),
        ];

        if ($this->model->create_team($team)) {
            echo json_encode(['status' => 'success', 'message' => 'Team created successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to create team.']);
        }
    }
}
