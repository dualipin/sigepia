<?php
include 'conexion.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['Usuario'];
    $pass = $_POST['password'];

    // Consultar si el usuario existe
    $stmt = $conn->prepare("SELECT user, pass, tipo FROM usuarios WHERE user = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        
        if (password_verify($pass, $row['pass'])) {
            $_SESSION['user'] = $row['user'];
            $_SESSION['tipo'] = $row['tipo'];

            if ($row['tipo'] === 'alumno') {
                echo json_encode(["status" => "success", "redirect" => "intalum.html"]);
            } else {
                echo json_encode(["status" => "success", "redirect" => "intdoc.html"]);
            }
        } else {
            echo json_encode(["status" => "error", "message" => "Contraseña incorrecta."]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Usuario no encontrado."]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Acceso no permitido."]);
}
?>