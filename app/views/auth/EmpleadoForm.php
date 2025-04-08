<div class="container-lg px-5">
    <form id="form-registrar-empleado">
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="rfc" class="form-label">RFC</label>
                <input type="text" id="rfc" name="rfc" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="no_empleado" class="form-label">No Empleado</label>
                <input type="text" id="no_empleado" name="no_empleado" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" id="apellido" name="apellido" class="form-control" required>
            </div>
        </div>


        <div class="col-12">
            <button type="submit" class="btn btn-primary"><?= $nombre_accion ?? 'Registrar' ?></button>
        </div>
    </form>
</div>