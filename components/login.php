<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">

                        <form action="procesar_titulado.php" method="POST">
                            <h1 class="mb-4">Inicie Sesión</h1>

                            <!-- Fila 1: Nombre y Apellido -->
                            <div class="row mb-3">
                                <div class="col-md-10">
                                    <label for="nombre" class="form-label fw-bold">usuario</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Ingrese su RFC" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-10">
                                    <label for="apellido" class="form-label fw-bold">contraseña</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido"
                                        placeholder="Ingrese su apellido" required>
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary">Iniciar Sesión</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d503.93858624469146!2d-92.60852556850092!3d17.777418007694212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1741959905343!5m2!1ses-419!2smx"
                            width="100%" height="450" style="border:0; box-shadow: 0 4px 8px rgba(0,0,0,0.2);"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>