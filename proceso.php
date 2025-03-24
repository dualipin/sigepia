<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pruebas Piloto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center text-primary mb-4">Registro de Preceso de P.P</h2>
            <form id="registroForm">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="consultaPrueba" placeholder="Consultar prueba por nombre">
                    <button type="button" class="btn btn-secondary" id="consultarBtn">🔍 Consultar</button>
                </div>

                <div class="mb-3">
                    <label for="nombrePrueba" class="form-label">Nombre de la prueba</label>
                    <input type="text" class="form-control" id="nombrePrueba" placeholder="Ingrese el nombre">
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="fechaRegistro" class="form-label">Fecha de registro</label>
                        <input type="date" class="form-control" id="fechaRegistro">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="responsable" class="form-label">Asesor</label>
                        <select class="form-select" id="responsable">
                            <option selected>Seleccione...</option>
                            <option value="Walberto Gonzalez Cornelio">Walberto Gonzalez Cornelio</option>
                            <option value="Rosa Elvia Izquierdo Correa">Rosa Elvia Izquierdo Correa</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="nombreProducto" class="form-label">Nombre del producto</label>
                        <input type="text" class="form-control" id="nombreProducto" placeholder="Ingrese el nombre">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Alumno" class="form-label">Alumno Responsable del Registro</label>
                        <select class="form-select" id="Alumnoresponsable">
                            <option selected>Seleccione...</option>
                            <option value="Angel">Angel de Jesus</option>
                            <option value="Hanny">Hanny</option>
                        </select>
                    </div>


                    <label for="responsable" class="form-label">Cantidades usadas en el proceso de la prueba</label>
                    <!-- Pesado -->
                    <div class="mb-3">
                        <label class="form-label">Pesado</label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" id="pesadoEntrada" placeholder="Entrada" min="0">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="pesadoSalida" placeholder="Salida" min="0">
                            </div>
                            <div class="col">
                                <select class="form-select" id="unidadPesado">
                                    <option selected>Unidad de medida</option>
                                    <option value="kg">Kilogramos</option>
                                    <option value="G">Gramos</option>
                                    <option value="Milig">Miligramos</option>
                                    <option value="Lit">Litros</option>
                                    <option value="milit">Mililitros</option>
                                </select>
                            </div>
                        </div>
                    </div>
        
                    <!-- Tamizado -->
                    <div class="mb-3">
                        <label class="form-label">Tamizado</label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" id="tamizadoEntrada" placeholder="Entrada" min="0">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="tamizadoSalida" placeholder="Salida" min="0">
                            </div>
                            <div class="col">
                                <select class="form-select" id="unidadTamizado">
                                    <option selected>Unidad de medida</option>
                                    <option value="kg">Kilogramos</option>
                                    <option value="Mg">Miligramos</option>
                                    <option value="G">Gramos</option>
                                    <option value="On">Onza</option>
                                </select>
                            </div>
                        </div>
                    </div>
        
                    <!-- Cocción -->
                    <div class="mb-3">
                        <label class="form-label">Cocción</label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" id="coccionEntrada" placeholder="Entrada" min="0">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="coccionSalida" placeholder="Salida" min="0">
                            </div>
                            <div class="col">
                                <select class="form-select" id="unidadCoccion">
                                    <option selected>Unidad de medida</option>
                                    <option value="C">C°</option>
                                    <option value="F°">F°</option>
                                </select>
                            </div>
                        </div>
                    </div>
        
                    <!-- Pelado -->
                    <div class="mb-3">
                        <label class="form-label">Pelado</label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" id="peladoEntrada" placeholder="Entrada" min="0">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="peladoSalida" placeholder="Salida" min="0">
                            </div>
                            <div class="col">
                                <select class="form-select" id="unidadPelado">
                                    <option selected>Unidad de medida</option>
                                    <option value="kg">Kilogramosg</option>
                                    <option value="G">Gramos</option>
                                    <option value="Mg">Miligramos</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <button type="button" class="btn btn-primary w-100" id="guardarBtn">💾 Guardar</button>
                <button type="button" class="btn btn-warning w-100 mt-2" id="actualizarBtn">🔄 Actualizar</button>
            </form>
        </div>

        <div class="mt-5">
            <h3 class="text-center text-success">Datos Registrados</h3>
            <table class="table table-striped table-hover table-bordered mt-3">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Asesor</th>
                        <th>Producto</th>
                        <th>Alumno</th>
                        <th>Pesado Entrada</th>
                        <th>Pesado Salida</th>
                        <th>Tamizado Entrada</th>
                        <th>Tamizado Salida</th>
                        <th>Cocción Entrada</th>
                        <th>Cocción Salida</th>
                        <th>Pelado Entrada</th>
                        <th>Pelado Salida</th>
                    </tr>
                </thead>
                <tbody id="tablaDatos"></tbody>
            </table>
        </div>
    </div>

    <script>
        // Función para guardar los datos ingresados en los campos y mostrarlos en la tabla
        document.getElementById('guardarBtn').addEventListener('click', () => {
            const nombrePrueba = document.getElementById('nombrePrueba').value.trim();
            const fechaRegistro = document.getElementById('fechaRegistro').value;
            const responsable = document.getElementById('responsable').value;
            const nombreProducto = document.getElementById('nombreProducto').value.trim();
            const alumnoResponsable = document.getElementById('Alumnoresponsable').value;
            const pesadoEntrada = document.getElementById('pesadoEntrada').value + " " + document.getElementById('unidadPesado').value;
            const pesadoSalida = document.getElementById('pesadoSalida').value + " " + document.getElementById('unidadPesado').value;
            const tamizadoEntrada = document.getElementById('tamizadoEntrada').value + " " + document.getElementById('unidadTamizado').value;
            const tamizadoSalida = document.getElementById('tamizadoSalida').value + " " + document.getElementById('unidadTamizado').value;
            const coccionEntrada = document.getElementById('coccionEntrada').value + " " + document.getElementById('unidadCoccion').value;
            const coccionSalida = document.getElementById('coccionSalida').value + " " + document.getElementById('unidadCoccion').value;
            const peladoEntrada = document.getElementById('peladoEntrada').value + " " + document.getElementById('unidadPelado').value;
            const peladoSalida = document.getElementById('peladoSalida').value + " " + document.getElementById('unidadPelado').value;

            if (!nombrePrueba || !fechaRegistro || responsable === "Seleccione..." || !nombreProducto || alumnoResponsable === "Seleccione...") {
                alert("Por favor, complete todos los campos obligatorios.");
                return;
            }

            const tabla = document.getElementById('tablaDatos');
            const nuevaFila = tabla.insertRow();

            nuevaFila.innerHTML = `
                <td>${nombrePrueba}</td>
                <td>${fechaRegistro}</td>
                <td>${responsable}</td>
                <td>${nombreProducto}</td>
                <td>${alumnoResponsable}</td>
                <td>${pesadoEntrada}</td>
                <td>${pesadoSalida}</td>
                <td>${tamizadoEntrada}</td>
                <td>${tamizadoSalida}</td>
                <td>${coccionEntrada}</td>
                <td>${coccionSalida}</td>
                <td>${peladoEntrada}</td>
                <td>${peladoSalida}</td>
            `;

            alert("Datos guardados correctamente.");
            document.getElementById('registroForm').reset(); // Limpiar el formulario
        });
        let filaSeleccionada = null; // Variable para guardar la fila seleccionada

// Función para consultar una prueba por su nombre
document.getElementById('consultarBtn').addEventListener('click', () => {
    const consulta = document.getElementById('consultaPrueba').value.toLowerCase().trim();
    const filas = document.getElementById('tablaDatos').getElementsByTagName('tr');
    let encontrado = false;

    for (let i = 0; i < filas.length; i++) {
        const celdas = filas[i].getElementsByTagName('td');
        if (celdas.length > 0) {
            const nombrePrueba = celdas[0].textContent.toLowerCase().trim();
            
            if (nombrePrueba === consulta) {
                filaSeleccionada = filas[i]; // Guarda la fila seleccionada
                llenarFormulario(celdas);
                encontrado = true;
                break; // Sale del bucle al encontrar la prueba
            }
        }
    }

    if (!encontrado) {
        alert("No se encontró la prueba.");
        filaSeleccionada = null;
    }
});

// Función para llenar el formulario con los datos de la fila encontrada
function llenarFormulario(celdas) {
    document.getElementById('nombrePrueba').value = celdas[0].textContent;
    document.getElementById('fechaRegistro').value = celdas[1].textContent;
    document.getElementById('responsable').value = celdas[2].textContent;
    document.getElementById('nombreProducto').value = celdas[3].textContent;
    document.getElementById('Alumnoresponsable').value = celdas[4].textContent;
    document.getElementById('pesadoEntrada').value = obtenerValorNumerico(celdas[5].textContent);
    document.getElementById('pesadoSalida').value = obtenerValorNumerico(celdas[6].textContent);
    document.getElementById('tamizadoEntrada').value = obtenerValorNumerico(celdas[7].textContent);
    document.getElementById('tamizadoSalida').value = obtenerValorNumerico(celdas[8].textContent);
    document.getElementById('coccionEntrada').value = obtenerValorNumerico(celdas[9].textContent);
    document.getElementById('coccionSalida').value = obtenerValorNumerico(celdas[10].textContent);
    document.getElementById('peladoEntrada').value = obtenerValorNumerico(celdas[11].textContent);
    document.getElementById('peladoSalida').value = obtenerValorNumerico(celdas[12].textContent);
}

// Función para extraer solo el número de una celda con unidades
function obtenerValorNumerico(texto) {
    return texto.split(" ")[0]; // Separa el número de la unidad y devuelve solo el número
}

// Evento para actualizar la fila con los datos modificados
document.getElementById('actualizarBtn').addEventListener('click', () => {
    if (filaSeleccionada) {
        const celdas = filaSeleccionada.getElementsByTagName('td');

        celdas[0].textContent = document.getElementById('nombrePrueba').value;
        celdas[1].textContent = document.getElementById('fechaRegistro').value;
        celdas[2].textContent = document.getElementById('responsable').value;
        celdas[3].textContent = document.getElementById('nombreProducto').value;
        celdas[4].textContent = document.getElementById('Alumnoresponsable').value;
        celdas[5].textContent = document.getElementById('pesadoEntrada').value + " " + document.getElementById('unidadPesado').value;
        celdas[6].textContent = document.getElementById('pesadoSalida').value + " " + document.getElementById('unidadPesado').value;
        celdas[7].textContent = document.getElementById('tamizadoEntrada').value + " " + document.getElementById('unidadTamizado').value;
        celdas[8].textContent = document.getElementById('tamizadoSalida').value + " " + document.getElementById('unidadTamizado').value;
        celdas[9].textContent = document.getElementById('coccionEntrada').value + " " + document.getElementById('unidadCoccion').value;
        celdas[10].textContent = document.getElementById('coccionSalida').value + " " + document.getElementById('unidadCoccion').value;
        celdas[11].textContent = document.getElementById('peladoEntrada').value + " " + document.getElementById('unidadPelado').value;
        celdas[12].textContent = document.getElementById('peladoSalida').value + " " + document.getElementById('unidadPelado').value;

        alert("Prueba actualizada correctamente.");
        filaSeleccionada = null; // Reiniciar la selección
        document.getElementById('registroForm').reset(); // Limpiar el formulario
    } else {
        alert("Primero consulta una prueba antes de actualizar.");
    }
});

// Función para validar los campos del formulario
function validarFormulario() {
    let nombrePrueba = document.getElementById('nombrePrueba').value.trim();
    let fechaRegistro = document.getElementById('fechaRegistro').value.trim();
    let responsable = document.getElementById('responsable').value;
    let nombreProducto = document.getElementById('nombreProducto').value.trim();
    let alumnoResponsable = document.getElementById('Alumnoresponsable').value;
    let pesadoEntrada = document.getElementById('pesadoEntrada').value.trim();
    let pesadoSalida = document.getElementById('pesadoSalida').value.trim();

    if (nombrePrueba === "" || fechaRegistro === "" || responsable === "Seleccione..." || 
        nombreProducto === "" || alumnoResponsable === "Seleccione..." || 
        pesadoEntrada === "" || pesadoSalida === "") {
        alert("⚠️ Todos los campos obligatorios deben estar completos.");
        return false;
    }

    // Validar que los valores numéricos sean mayores o iguales a 0
    if (isNaN(pesadoEntrada) || isNaN(pesadoSalida) || Number(pesadoEntrada) < 0 || Number(pesadoSalida) < 0) {
        alert("⚠️ Los valores numéricos deben ser números válidos y mayores o iguales a 0.");
        return false;
    }

    return true; // Todo está correcto
}

// Evento para guardar datos con validación
document.getElementById('guardarBtn').addEventListener('click', () => {
    if (!validarFormulario()) return; // Si no pasa la validación, no se ejecuta el guardado

    const tabla = document.getElementById('tablaDatos');
    const nuevaFila = document.createElement('tr');
    nuevaFila.innerHTML = `
        <td>${document.getElementById('nombrePrueba').value}</td>
        <td>${document.getElementById('fechaRegistro').value}</td>
        <td>${document.getElementById('responsable').value}</td>
        <td>${document.getElementById('nombreProducto').value}</td>
        <td>${document.getElementById('Alumnoresponsable').value}</td>
        <td>${document.getElementById('pesadoEntrada').value} ${document.getElementById('unidadPesado').value}</td>
        <td>${document.getElementById('pesadoSalida').value} ${document.getElementById('unidadPesado').value}</td>
    `;
    tabla.appendChild(nuevaFila);
    document.getElementById('registroForm').reset();
});

// Evento para actualizar datos con validación
document.getElementById('actualizarBtn').addEventListener('click', () => {
    if (!filaSeleccionada) {
        alert("⚠️ Primero consulta una prueba antes de actualizar.");
        return;
    }
    if (!validarFormulario()) return; // Si no pasa la validación, no se ejecuta la actualización

    const celdas = filaSeleccionada.getElementsByTagName('td');
    celdas[0].textContent = document.getElementById('nombrePrueba').value;
    celdas[1].textContent = document.getElementById('fechaRegistro').value;
    celdas[2].textContent = document.getElementById('responsable').value;
    celdas[3].textContent = document.getElementById('nombreProducto').value;
    celdas[4].textContent = document.getElementById('Alumnoresponsable').value;
    celdas[5].textContent = document.getElementById('pesadoEntrada').value + " " + document.getElementById('unidadPesado').value;
    celdas[6].textContent = document.getElementById('pesadoSalida').value + " " + document.getElementById('unidadPesado').value;

    alert("✅ Prueba actualizada correctamente.");
    filaSeleccionada = null;
    document.getElementById('registroForm').reset();
});

    </script>
</body>
</html>

