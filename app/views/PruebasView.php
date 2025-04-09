<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Proceso de Pruebas Pilotos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function validateNumericInput(event) {
            const charCode = event.which ? event.which : event.keyCode;
            if (charCode < 48 || charCode > 57) {
                event.preventDefault();
            }
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Registro de proceso de pruebas pilotos y consulta</h2>
        <form id="formRegistro">
            <div class="mb-3">
                <label for="nombrePrueba" class="form-label">Nombre de la prueba</label>
                <input type="text" class="form-control" id="nombrePrueba" name="nombrePrueba" required>
            </div>
            <div class="mb-3">
                <label for="fechaRegistro" class="form-label">Fecha de registro</label>
                <input type="date" class="form-control" id="fechaRegistro" name="fechaRegistro" required>
            </div>
            <div class="mb-3">
                <label for="responsable" class="form-label">Responsable</label>
                <select class="form-select" id="responsable" name="responsable" required>
                    <option value="">Seleccione un responsable</option>
                    <!-- Opciones dinámicas -->
                </select>
            </div>
            <div class="mb-3">
                <label for="equipo" class="form-label">Equipo</label>
                <select class="form-select" id="equipo" name="equipo" required>
                    <option value="">Seleccione un equipo</option>
                    <!-- Opciones dinámicas -->
                </select>
            </div>
            <div class="mb-3">
                <label for="producto" class="form-label">Producto</label>
                <input type="text" class="form-control" id="producto" name="producto" required>
            </div>
            <div class="mb-3">
                <label for="procedimiento" class="form-label">Procedimiento</label>
                <textarea class="form-control" id="procedimiento" name="procedimiento" rows="3" required></textarea>
            </div>
            <!-- Pesado -->
            <div class="mb-3">
                <label class="form-label">Pesado</label>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Entrada" onkeypress="validateNumericInput(event)" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Salida" onkeypress="validateNumericInput(event)" required>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select" required>
                            <option value="">Unidad de medida</option>
                            <!-- Opciones dinámicas -->
                        </select>
                    </div>
                </div>
            </div>
            <!-- Tamizado -->
            <div class="mb-3">
                <label class="form-label">Tamizado</label>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Entrada" onkeypress="validateNumericInput(event)" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Salida" onkeypress="validateNumericInput(event)" required>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select" required>
                            <option value="">Unidad de medida</option>
                            <!-- Opciones dinámicas -->
                        </select>
                    </div>
                </div>
            </div>
            <!-- Cocción -->
            <div class="mb-3">
                <label class="form-label">Cocción</label>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Entrada" onkeypress="validateNumericInput(event)" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Salida" onkeypress="validateNumericInput(event)" required>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select" required>
                            <option value="">Unidad de medida</option>
                            <!-- Opciones dinámicas -->
                        </select>
                    </div>
                </div>
            </div>
            <!-- Pelado -->
            <div class="mb-3">
                <label class="form-label">Pelado</label>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Entrada" onkeypress="validateNumericInput(event)" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Salida" onkeypress="validateNumericInput(event)" required>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select" required>
                            <option value="">Unidad de medida</option>
                            <!-- Opciones dinámicas -->
                        </select>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-secondary">Consultar</button>
            </div>
        </form>
        <div class="mt-5">
            <h3>Datos Registrados</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre de la prueba</th>
                        <th>Fecha de registro</th>
                        <th>Responsable</th>
                        <th>Equipo</th>
                        <th>Producto</th>
                        <th>Procedimiento</th>
                        <th>Pesado</th>
                        <th>Tamizado</th>
                        <th>Cocción</th>
                        <th>Pelado</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Datos dinámicos -->
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>