<form action="">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="form-control">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción:</label>
        <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="estado" class="form-label">Estado:</label>
        <select id="estado" name="estado" class="form-select">
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="tipo" class="form-label">Tipo:</label>
        <select id="tipo" name="tipo" class="form-select">
            <option value="personal">Personal</option>
            <option value="profesional">Profesional</option>
        </select>
    </div>
</form>