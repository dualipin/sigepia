<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Mi Empresa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container mt-5 p-4 bg-white shadow-lg rounded">
    <h2 class="fw-bold text-center text-primary">Consulta de Productos</h2>
    
    <!-- Menú para seleccionar el producto -->
    <div class="d-flex flex-column align-items-center mb-4">
        <label for="productSelect" class="fw-bold mb-2">Selecciona un Producto:</label>
        <select id="productSelect" class="form-select w-50 shadow-sm">
            <option value="mermelada">Mermelada de Tomate</option>
            <option value="mole">Mole con Chile Amashito</option>
            <option value="pan">Pan Artesanal</option>
        </select>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Objetivo -->
        <div class="col">
            <div class="card border-0 shadow-sm p-3">
                <img id="imgObjetivo" src="merme2.jpg" class="card-img-top img-fluid w-75 mx-auto rounded-circle" alt="Objetivos">
                <div class="card-body text-center">
                    <h4 class="text-success fw-bold">🎯 Objetivo</h4>
                    <p id="objetivoText">Innovar en la creación de una mermelada de tomate con el equilibrio perfecto entre dulzura y frescura.</p>
                </div>
            </div>
        </div>
        
        <!-- Misión -->
        <div class="col">
            <div class="card border-0 shadow-sm p-3">
                <img id="imgMision" src="merme3.jpg" class="card-img-top img-fluid w-75 mx-auto rounded-circle" alt="Misión">
                <div class="card-body text-center">
                    <h4 class="text-info fw-bold">💡 Misión</h4>
                    <p id="misionText" class="lead">Ofrecer a nuestros clientes una experiencia única con ingredientes 100% naturales y artesanales.</p>
                </div>
            </div>
        </div>

        <!-- Visión -->
        <div class="col">
            <div class="card border-0 shadow-sm p-3">
                <img id="imgVision" src="merme4.jpg" class="card-img-top img-fluid w-75 mx-auto rounded-circle" alt="Visión">
                <div class="card-body text-center">
                    <h4 class="text-warning fw-bold">🚀 Visión</h4>
                    <p id="visionText">Convertirnos en la marca líder de mermeladas innovadoras y saludables a nivel nacional.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h3 class="text-center text-primary">📊 Pruebas del Producto</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover mt-3 shadow-sm">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">Número de P.P</th>
                        <th scope="col">Descripción de la Prueba</th>
                        <th scope="col">Fecha de Elaboración</th>
                    </tr>
                </thead>
                <tbody id="tablaPruebas">
                    <!-- Filas dinámicas -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    const pruebas = {
        mermelada: [
            { id: 1, descripcion: "Prueba de sabor inicial", fecha: "2023-01-15" },
            { id: 2, descripcion: "Ajuste de dulzura", fecha: "2023-02-10" },
            { id: 3, descripcion: "Prueba de conservación", fecha: "2023-03-05" },
            { id: 4, descripcion: "Ajuste de dulzura", fecha: "2023-02-10" },
            { id: 5, descripcion: "Prueba de conservación", fecha: "2023-04-15" },
            { id: 6, descripcion: "Prueba de preparación", fecha: "2023-05-19" },
            {id: 7, descripcion: "Prueba de vida util", fecha: "2023-05-20"}
        ],
        mole: [
            { id: 1, descripcion: "Prueba de mezcla de ingredientes", fecha: "2023-04-12" },
            { id: 2, descripcion: "Ajuste de picor", fecha: "2023-05-20" },
            { id: 3, descripcion: "Prueba de mezcla de ingredientes", fecha: "2023-07-17" },
            { id: 4, descripcion: "Ajuste de picor", fecha: "2023-08-29" },
            { id: 5, descripcion: "Prueba de empaque", fecha: "2023-09-19" },
            { id: 6, descripcion: "Prueba de vida util", fecha: "2023-10-11" }
        ],
        pan: [
            { id: 1, descripcion: "Prueba de textura", fecha: "2023-07-08" },
            { id: 2, descripcion: "Ajuste de horneado", fecha: "2023-08-22" },
            { id: 3, descripcion: "Prueba de textura", fecha: "2023-10-10" },
            { id: 4, descripcion: "Ajuste de horneado", fecha: "2023-11-21" },
            { id: 5, descripcion: "Prueba de frescura", fecha: "2023-12-11" },
            { id: 6, descripcion: "Prueba de vida util", fecha: "2023-12-28" },
            { id: 7, descripcion: "Prueba de vida util", fecha: "2023-12-29" }
        ]
    };

    function actualizarTablaPruebas(productoSeleccionado) {
        const tablaPruebas = document.getElementById("tablaPruebas");
        tablaPruebas.innerHTML = "";
        pruebas[productoSeleccionado].forEach(prueba => {
            const fila = document.createElement("tr");
            fila.innerHTML = `
                <th scope="row">${prueba.id}</th>
                <td>${prueba.descripcion}</td>
                <td>${prueba.fecha}</td>
            `;
            tablaPruebas.appendChild(fila);
        });
    }

    const productos = {
        mermelada: {
            objetivo: "Desarrollar una mermelada de tomate equilibrada en dulzura y acidez.",
            mision: "Ofrecer mermelada artesanal sin conservantes, resaltando el sabor auténtico del tomate.",
            vision: "Ser reconocidos como la marca líder en mermeladas innovadoras y saludables.",
            imgObjetivo: "merme2.jpg",
            imgMision: "merme3.jpg",
            imgVision: "merme4.jpg"
        },
        mole: {
            objetivo: "Crear un mole en polvo con chile amashito para paladares exigentes.",
            mision: "Preservar la tradición del mole con ingredientes naturales y de alta calidad.",
            vision: "Llevar el auténtico sabor del mole mexicano a nivel mundial.",
            imgObjetivo: "mole1.avif",
            imgMision: "mole2.avif",
            imgVision: "mole3.avif"
        },
        pan: {
            objetivo: "Ofrecer un pan artesanal sin conservantes, con ingredientes naturales.",
            mision: "Brindar una experiencia única con pan fresco y saludable.",
            vision: "Ser referentes en panadería artesanal en la región.",
            imgObjetivo: "pan1.jpg",
            imgMision: "pan2.avif",
            imgVision: "pan3.avif"
        }
    };

    document.getElementById("productSelect").addEventListener("change", function () {
        let productoSeleccionado = this.value;
        
        document.getElementById("objetivoText").textContent = productos[productoSeleccionado].objetivo;
        document.getElementById("misionText").textContent = productos[productoSeleccionado].mision;
        document.getElementById("visionText").textContent = productos[productoSeleccionado].vision;

        document.getElementById("imgObjetivo").src = productos[productoSeleccionado].imgObjetivo;
        document.getElementById("imgMision").src = productos[productoSeleccionado].imgMision;
        document.getElementById("imgVision").src = productos[productoSeleccionado].imgVision;

        actualizarTablaPruebas(productoSeleccionado);
    });

    actualizarTablaPruebas("mermelada");
</script>

</body>
</html>



