<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\ProjectModel;

require_once __DIR__ . '/../models/ProjectModel.php';

class HomeController extends Controller
{
    private $projectModel;
    public function __construct()
    {
        $this->projectModel = new ProjectModel();
    }
    public function index()
    {
        $this->render('Home', 'AppLayout');
    }
    public function projects()
    {
        $projects = $this->projectModel->getAll();
        $this->render('projects', 'AppLayout', data: ['projects' => $projects]);
    }
    public function dates()
    {
        $this->render('dates', 'AppLayout');
    }
}
