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
}
