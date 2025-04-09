<?php

namespace App\Controllers\Admin;

use Core\Controller;

class HomeController extends Controller
{
    public function panel()
    {
        $this->render('HomePanel',data: [
            'title' => 'Admin Home',
            'user' => [
                'name' => 'Admin User',
            ],
        ]);
    }
}
