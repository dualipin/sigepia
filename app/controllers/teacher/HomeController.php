<?php
namespace App\Controllers\Teacher;

use Core\Controller;

class HomeController extends Controller
{
    public function panel()
    {
        $this->render('HomePanel', data: [
            'title' => 'Teacher Home',
            'user' => [
                'name' => 'Teacher User',
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