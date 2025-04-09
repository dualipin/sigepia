<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Registrar Jefe de Carrera
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Jefe de Carrera</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/teachers/create" method="POST" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="rfc" class="form-label">RFC (Usuario):</label>
                        <input type="text" id="rfc" name="rfc" class="form-control" maxlength="13" required>
                    </div>

                    <div class="mb-3">
                        <label for="kn" class="form-label">Clave de Empleado:</label>
                        <input type="text" id="kn" name="kn" class="form-control" maxlength="20" required>
                    </div>

                    <div class="mb-3">
                        <label for="nm" class="form-label">Nombre:</label>
                        <input type="text" id="nm" name="nm" class="form-control" maxlength="150" required>
                    </div>

                    <div class="mb-3">
                        <label for="ps" class="form-label">Apellido Paterno:</label>
                        <input type="text" id="ps" name="ps" class="form-control" maxlength="150" required>
                    </div>

                    <div class="mb-3">
                        <label for="ms" class="form-label">Apellido Materno:</label>
                        <input type="text" id="ms" name="ms" class="form-control" maxlength="150" required>
                    </div>

                    <div class="mb-3">
                        <label for="birth" class="form-label">Fecha de Nacimiento:</label>
                        <input type="date" id="birth" name="birth" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" class="form-control" maxlength="255" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear Profesor</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>