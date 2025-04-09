<?php

namespace App\Controllers\CareerManager;

use Core\Controller;

class UsersController extends Controller
{
    public function student()
    {
        $this->render('students', data: [
            'title' => 'Estudiantes',
            'components' => __DIR__ . '/../../views/forms/StudentForm.php',
        ]);
    }

    public function teacher()
    {
        $this->render('Teachers', data: [
            'title' => 'Maestros',
            'components' => __DIR__ . '/../../views/forms/TeacherForm.php',
        ]);
    }

    public function careermanager()
    {
        $this->render('CareerManager', data: [
            'title' => 'Jefes de Carrera',
            'components' => __DIR__ . '/../../views/forms/CareerManagerForm.php',
        ]);
    }
}
