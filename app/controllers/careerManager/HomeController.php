<?php
namespace App\Controllers\CareerManager;

use Core\Controller;

class HomeController extends Controller
{
    public function panel()
    {
        $this->render('HomePanel', data: [
            'title' => 'Career Manager Home',
            'user' => [
                'name' => 'Career Manager User',
            ],
        ]);
    }

    public function projects()
    {
        $this->render('Projects', data: [
            'title' => 'Projects',
            'components' => __DIR__ . '/../../views/forms/ProjectForm.php',
        ]);
    }

    public function teams()
    {
        $this->render('Teams', data: [
            'title' => 'Teams',
            'components' => __DIR__ . '/../../views/forms/TeamForm.php',
        ]);
    }
}