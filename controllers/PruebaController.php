<?php
// Establece el encabezado de la respuesta a JSON
header('Content-Type: application/json');

// Obtén los datos JSON enviados a través de una solicitud POST
$data = json_decode(file_get_contents("php://input"), true);

// Verifica si la acción es 'guardar' antes de continuar
if ($data['action'] === 'guardar') {
    // Obtener los datos del formulario
    $nombrePrueba = $data['datos']['nombrePrueba'];
    $fechaRegistro = $data['datos']['fechaRegistro'];
    $responsable = $data['datos']['responsable'];
    $nombreProducto = $data['datos']['nombreProducto'];
    $Alumnoresponsable = $data['datos']['Alumnoresponsable'];
    $pesadoEntrada = $data['datos']['pesadoEntrada'];
    $pesadoSalida = $data['datos']['pesadoSalida'];
    $unidadPesado = $data['datos']['unidadPesado'];
    $tamizadoEntrada = $data['datos']['tamizadoEntrada'];
    $tamizadoSalida = $data['datos']['tamizadoSalida'];
    $unidadTamizado = $data['datos']['unidadTamizado'];
    $coccionEntrada = $data['datos']['coccionEntrada'];
    $coccionSalida = $data['datos']['coccionSalida'];
    $unidadCoccion = $data['datos']['unidadCoccion'];
    $peladoEntrada = $data['datos']['peladoEntrada'];
    $peladoSalida = $data['datos']['peladoSalida'];
    $unidadPelado = $data['datos']['unidadPelado'];

    // Conexión a la base de datos (asegúrate de usar la configuración correcta)
    $conn = new mysqli("localhost", "root", "", "registro_pp");

    // Verifica si la conexión fue exitosa
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Prepara la consulta SQL para insertar los datos en la base de datos
    $query = "INSERT INTO pruebas_piloto (nombrePrueba, fechaRegistro, responsable, nombreProducto, Alumnoresponsable, 
              pesadoEntrada, pesadoSalida, unidadPesado, tamizadoEntrada, tamizadoSalida, unidadTamizado, 
              coccionEntrada, coccionSalida, unidadCoccion, peladoEntrada, peladoSalida, unidadPelado) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepara la consulta
    if ($stmt = $conn->prepare($query)) {
        // Vincula los parámetros a la consulta (en este caso, todos son cadenas)
        $stmt->bind_param("ssssssssssssssss", $nombrePrueba, $fechaRegistro, $responsable, $nombreProducto, 
                          $Alumnoresponsable, $pesadoEntrada, $pesadoSalida, $unidadPesado, $tamizadoEntrada, 
                          $tamizadoSalida, $unidadTamizado, $coccionEntrada, $coccionSalida, $unidadCoccion, 
                          $peladoEntrada, $peladoSalida, $unidadPelado);

        // Ejecuta la consulta
        if ($stmt->execute()) {
            // Respuesta exitosa
            echo json_encode(["success" => true]);
        } else {
            // Respuesta si hubo un error
            echo json_encode(["success" => false, "error" => $stmt->error]);
        }

        // Cierra la sentencia
        $stmt->close();
    } else {
        // Respuesta si la preparación de la consulta falla
        echo json_encode(["success" => false, "error" => "Error en la preparación de la consulta"]);
    }

    // Cierra la conexión
    $conn->close();
}
?>


