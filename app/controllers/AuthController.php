<?php

namespace App\Controllers;

class AuthController
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
                // Credenciales válidas
                $_SESSION['user'] = $username; // Almacenar el usuario en la sesión
                echo json_encode(['status' => 'success', 'message' => 'Inicio de sesión exitoso']);
            } else {
                // Mostrar un mensaje de error si las credenciales son inválidas
                header('HTTP/1.1 401 Unauthorized');
                echo json_encode(['status' => 'error', 'message' => 'Credenciales inválidas']);
            }

            // Lógica de autenticación aquí
        } else {
            // Mostrar el formulario de inicio de sesión
            header('Location: /');
        }
    }
}
