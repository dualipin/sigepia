<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Docentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <h1>Formulario para Registrar Docentes</h1>
    <div class="container-fluid">
        <div class="row">
            <h2>Registro de Docentes</h2>
            <div class="col-sm-12 d-flex justify-content-center align-items-center" >
                <form action="form-control" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" id="name" name="name" required class="form-control">
                    </div>
                    <div class="mb-3">

                        <label for="correo" class="form-label">Correo Electrónico:</label>
                        <input type="email" id="correo" name="correo" required class="form-control">
                    </div>
                    <div class="mb-3">

                        <label for="tel" class="form-label">Teléfono:</label>
                        <input type="phone" id="tele" name="tele" required class="form-control">
                    </div>
                    <div class="mb-3">

                        <label for="asigna" class="form-label">Asignatura:</label>
                        <input type="text" id="subject" name="subject" required class="form-control">
                    </div>

                    <input type="submit" value="Registrar">
                </form>
            </div>
        </div>
</body>

</html>