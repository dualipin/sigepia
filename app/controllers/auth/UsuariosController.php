<?php 
namespace App\Controllers\Auth;
use Core\Controller;
class UsuariosController extends Controller{
    public function registrar_empleado(){
        $this->render('auth/EmpleadoForm');
    }
}