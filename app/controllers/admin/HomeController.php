<?php

namespace App\Controllers\Admin;

use Core\Controller;

class HomeController extends Controller
{
    public function panel()
    {
        $this->render('admin/home',data: [
            'title' => 'Admin Home',
            'description' => 'Welcome to the admin panel.',
        ]);
    }
}
