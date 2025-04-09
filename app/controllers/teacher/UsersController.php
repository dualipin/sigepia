<?php

namespace App\Controllers\Teacher;

use Core\Controller;

class UsersController extends Controller
{
    public function student()
    {
        $this->render('Student', data: [
            'title' => 'Student',
            'user' => [
                'name' => 'Student User',
            ],
        ]);
    }
}
