<?php
include __DIR__ . "/components/header.php";
?>


<div class="container mt-5">
    <form action="procesar_titulado.php" method="POST">
        <h1 class="mb-4">Proceso de Titulación</h1>

        <!-- Fila 1: Nombre y Apellido -->
        <div class="row mb-3">
            <div class="col-md-2">
                <label for="nombre" class="form-label fw-bold">Clave</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder=""
                    required>
            </div>
            <div class="col-md-3">
                <label for="apellido" class="form-label fw-bold">Tipo Reactivo</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder=""
                    required>
            </div>

            <!-- Fila 2: Fecha de Titulación y Titulado -->

            <div class="col-md-3">
                <label for="fecha_titulacion" class="form-label fw-bold">Medida de volumen</label>
                <input type="text" class="form-control" id="fecha_titulacion" name="fecha_titulacion" required>
            </div>
            <div class="col-md-3">
                <label for="titulado" class="form-label fw-bold">Reacción</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="titulado" name="titulado" placeholder="" required>
                </div>
            </div>
        </div>

        <!-- Fila 3: Institución -->
        <div class="row mb-3">
            <div class="col-md-3">
                <label for="institucion" class="form-label fw-bold">Sustancia</label>
                <input type="text" class="form-control" id="institucion" name="institucion" placeholder="" required>
            </div>
            <div class="col-md-3">
                <label for="institucion" class="form-label fw-bold">Punto de equivalencia</label>
                <input type="text" class="form-control" id="institucion" name="institucion" placeholder="" required>
            </div>
            <div class="col-md-3">
                <label for="institucion" class="form-label fw-bold">Punto final</label>
                <input type="text" class="form-control" id="institucion" name="institucion" placeholder="" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="institucion" class="form-label fw-bold">Requisitos</label>
                <textarea class="form-control" name="" id=""></textarea>
            </div>
        </div>
        <!-- Botón de envío -->
        <div class="row mt-3">
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary w-100">Enviar</button>
            </div>
        </div>
    </form>
</div>



<?php
include __DIR__ . "/components/footer.php";