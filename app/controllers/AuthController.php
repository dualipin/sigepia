<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use Core\Controller;

require_once __DIR__ . '/../models/ProjectModel.php';


class AuthController extends Controller
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Aquí puedes manejar la lógica de inicio de sesión
            // Por ejemplo, validar las credenciales del usuario
            $username = $_POST['usuario'] ?? null;
            $password = $_POST['password'] ?? null;

            // Validar las credenciales
            if ($username && $password) {
                $user = [
                    'name' => 'Martin Sanchez',
                    'role' => 'careermanager',
                    'username' => $username,
                ];

                $redirect = INITIAL_ROUTE . '/';

                if ($user['role'] === 'careermanager') {
                    $redirect = INITIAL_ROUTE . '/careermanager/';
                } elseif ($user['role'] === 'student') {
                    $redirect = INITIAL_ROUTE . '/student/';
                } elseif ($user['role'] === 'teacher') {
                    $redirect = INITIAL_ROUTE . '/teacher/';
                }

                // Credenciales válidas
                $_SESSION['user'] = $user; // Almacenar el usuario en la sesión
                echo json_encode(['status' => 'success', 'to' => $redirect . 'home/panel']);
            } else {
                // Mostrar un mensaje de error si las credenciales son inválidas
                header('HTTP/1.1 401 Unauthorized');
                echo json_encode(['status' => 'error', 'message' => 'Credenciales inválidas']);
            }

            // Lógica de autenticación aquí
        } else {

            $model = new ProjectModel();

            $activeProjects = $model->get_active();

            // Mostrar el formulario de inicio de sesión
            $this->render('Login', 'AppLayout', data: [
                'title' => 'Inicio de Sesión',
                'projects' => $activeProjects, // Puedes pasar los proyectos aquí si es necesario
            ]);
        }
    }

    public function register_student()
    {
        // Aquí puedes manejar la lógica de registro de estudiantes
        // Por ejemplo, validar los datos del formulario y guardarlos en la base de datos
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? null;
            $email = $_POST['email'] ?? null;
            $password = $_POST['password'] ?? null;

            // Validar los datos y guardar en la base de datos
            // Lógica de registro aquí

            echo json_encode(['status' => 'success', 'message' => 'Registro exitoso']);
        } else {
            // Mostrar el formulario de registro
            $this->render('RegisterStudent', 'AppLayout', data: [
                'title' => 'Registro de Estudiante',
            ]);
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . INITIAL_ROUTE . '/auth/login/');
        exit;
    }

    private function encode_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }
}
