<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rfc = $_POST['rfc'];
    $nom = $_POST['nom'];
    $app = $_POST['app'];
    $apm = $_POST['apm'];
    $tel = $_POST['tel'];
    $corr = $_POST['corr'];
    $dir = $_POST['dir'];
    $est = $_POST['est'];
    $mun = $_POST['mun'];
    $loc = $_POST['loc'];
    $col = $_POST['col'];
    $cp = $_POST['cp'];
    $tipo_usuario = $_POST['tipo_usuario'];

    // La contraseña será el RFC encriptado
    $pass = password_hash($rfc, PASSWORD_DEFAULT);

    // Verificar si el RFC ya está registrado en la tabla usuarios
    $check = $conn->prepare("SELECT user FROM usuarios WHERE user = ?");
    $check->bind_param("s", $rfc);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo json_encode(["status" => "error", "message" => "El RFC ya está registrado."]);
    } else {
        // Insertar en la tabla usuarios
        $stmt_user = $conn->prepare("INSERT INTO usuarios (user, pass, tipo) VALUES (?, ?, ?)");
        $stmt_user->bind_param("sss", $rfc, $pass, $tipo_usuario);

        if ($stmt_user->execute()) {
            // Si es alumno, insertar en la tabla alumnos
            if ($tipo_usuario === "alumno") {
                $stmt_alumno = $conn->prepare("INSERT INTO alumnos (rfc, nom, app, apm, tel, corr, dir, est, mun, loc, col, cp) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt_alumno->bind_param("ssssssssssss", $rfc, $nom, $app, $apm, $tel, $corr, $dir, $est, $mun, $loc, $col, $cp);
                $stmt_alumno->execute();
                $stmt_alumno->close();
            } 
            // Si es docente, insertar en la tabla docentes
            elseif ($tipo_usuario === "docente") {
                $stmt_docente = $conn->prepare("INSERT INTO docentes (rfc, nom, app, apm, tel, corr, dir, est, mun, loc, col, cp) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt_docente->bind_param("ssssssssssss", $rfc, $nom, $app, $apm, $tel, $corr, $dir, $est, $mun, $loc, $col, $cp);
                $stmt_docente->execute();
                $stmt_docente->close();
            }

            echo json_encode(["status" => "success", "message" => "Usuario registrado correctamente."]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error al registrar el usuario."]);
        }
        $stmt_user->close();
    }

    $check->close();
    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Método no permitido."]);
}
?>
