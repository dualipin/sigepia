<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center">Registro de Usuarios</h2>

        <!-- Formulario para agregar usuarios -->
        <div class="card p-4 mb-4">
            <h4>Agregar Nuevo Usuario</h4>
            <form id="regis" method="POST">
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <label>RFC / Matrícula:</label>
                        <input type="text" name="rfc" id="rfc" class="form-control" maxlength="8" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Nombre:</label>
                        <input type="text" name="nom" class="form-control" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Apellido Paterno:</label>
                        <input type="text" name="app" class="form-control" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Apellido Materno:</label>
                        <input type="text" name="apm" class="form-control" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Teléfono:</label>
                        <input type="text" name="tel" class="form-control" maxlength="10">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Correo:</label>
                        <input type="email" name="corr" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Dirección:</label>
                        <input type="text" name="dir" class="form-control">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Estado:</label>
                        <input type="text" name="est" class="form-control">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Municipio:</label>
                        <input type="text" name="mun" class="form-control">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Localidad:</label>
                        <input type="text" name="loc" class="form-control">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Colonia:</label>
                        <input type="text" name="col" class="form-control">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Código Postal:</label>
                        <input type="text" name="cp" class="form-control" maxlength="5">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Tipo de Usuario:</label>
                        <select name="tipo_usuario" class="form-control">
                            <option value="alumno">Alumno</option>
                            <option value="docente">Docente</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Nombre de Usuario:</label>
                        <input type="text" name="user" id="user" class="form-control" readonly>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Contraseña:</label>
                        <input type="password" name="pass" id="pass" class="form-control" readonly>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Usuario</button>
            </form>
        </div>
    </div>

    <script>
        document.querySelector('#regis').addEventListener('submit', function (event) {
            event.preventDefault();
            let formData = new FormData(this);

            fetch('guardar.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    if (data.status === 'success') {
                        location.reload();
                    }
                })
                .catch(error => console.error('Error:', error));
        });

        // Asignar RFC automáticamente como usuario y contraseña
        document.querySelector('#rfc').addEventListener('input', function () {
            document.querySelector('#user').value = this.value;
            document.querySelector('#pass').value = this.value;
        });
    </script>

</body>

</html>