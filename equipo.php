<?php include __DIR__ . "/components/header.php"; ?>

<div class="container-md mt-5">
    <h2>Crear Equipo</h2>
    <form action="" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label class="form-label" for="nombreEquipo">Nombre del Equipo</label>
                <input type="text" class="form-control" id="nombreEquipo" name="nombreEquipo" required>
            </div>

            <div class="col-md-4 form-group">
                <label for="exampleDataList" class="form-label">Proyecto</label>
                <input class="form-control" list="datalistOptions" id="exampleDataList"
                    placeholder="Escribe para buscar..." required>
                <datalist id="datalistOptions">
                    <option value="San Francisco">
                    <option value="New York">
                    <option value="Seattle">
                    <option value="Los Angeles">
                    <option value="Chicago">
                </datalist>
            </div>
            <div class="row mt-3">
                <div class="form-group col-md-4">
                    <label for="alumnos">Alumnos</label>
                    <input type="text" class="form-control" id="nuevo_alumno" name="alumnos"
                        placeholder="Ingrese el nombre del alumno" required>
                    <div id="alumnos-list"></div>
                    <button type="button" class="btn btn-secondary mt-2" id="add-alumno">Agregar Alumno</button>
                </div>

                <script>
                    $(document).ready(function () {
                        let alumnoCount = 0;

                        $('#add-alumno').click(function () {
                            alumnoCount++;
                            const alumno = $('#nuevo_alumno').val();
                            $('#nuevo_alumno').val('');
                            $('#alumnos-list').append(`
                            <div class="form-check">
                                <input checked class="form-check-input" type="checkbox" value="Alumno ${alumnoCount}" id="alumno${alumnoCount}" name="alumnos[]">
                                <label class="form-check-label" for="alumno${alumnoCount}">
                                    ${alumno}
                                </label>
                            </div>
                                `);
                        });
                    });
                </script>
                <div class="form-group col-md-4">
                    <label for="docentes">Docentes</label>
                    <input type="text" class="form-control" id="nuevoDocente" name="docentes"
                        placeholder="Ingrese el nombre del docente" required>
                    <div id="docentes-list"></div>
                    <button type="button" class="btn btn-secondary mt-2" id="agregar-docente">Agregar Docente</button>

                    <script>
                        $(document).ready(function () {
                            let docenteCount = 0;

                            $('#agregar-docente').click(function () {
                                docenteCount++;
                                const docente = $('#nuevoDocente').val();
                                $('#nuevoDocente').val('');
                                $('#docentes-list').append(`
                                <div class="form-check">
                                    <input checked class="form-check-input" type="checkbox" value="Docente ${docenteCount}" id="docente${docenteCount}" name="docentes[]">
                                    <label class="form-check-label" for="docente${docenteCount}">
                                        ${docente}
                                    </label>
                                </div>
                                    `);
                            });
                        });
                    </script>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Crear Equipo</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php include __DIR__ . "/components/footer.php"; ?>