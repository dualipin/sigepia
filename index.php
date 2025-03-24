<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, { initialView: 'dayGridMonth' });
            calendar.render();
        });
    </script>
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Sistema de Gestión de Proyectos de Alimentaria</h1>
                <br>
            </div>
        </div>

        <!-- Noticias -->
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Noticias</h2>
                <marquee behavior="scroll" direction="left">
                    <img src="assets/img/logo.png" class="img-thumbnail" height="150" width="150">
                </marquee>
            </div>
        </div>

        <br>

        <div class="row">
            <!-- Calendario -->
            <div class="col-sm-4">
                <h2>Calendario</h2>
                <div id="calendar"></div>
            </div>

            <!-- Formulario de Inicio de Sesión -->
            <div class="col-sm-4">
                <!-- Formulario de inicio de sesión -->
                <div class="row">
                    <form class="form-control">
                        <h2>Inicio de Sesión</h2>
                        <div class="mb-3">
                            <label for="Usuario" class="form-label">Usuario</label>
                            <input type="text" id="Usuario" name="Usuario" placeholder="Escribe tu usuario"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" name="password" id="password" placeholder="Escribe tu contraseña"
                                class="form-control">
                        </div>
                        <div class="mb-3" style="text-align: center;">

                            <button type="button" class="btn btn-outline-primary"
                                onclick="location.href='prod_activo.html'">Ingresar</button>
                               
                            <!--<div>
                            <br>
                            --><button type="button" class="btn btn-outline-secondary"
                            onclick="location.href='regisuser.php'">Registrar Alumnos</button>
                            <!--<button type="button" class="btn btn-outline-secondary">Registrarse Docentes</button>
                        </div>-->
                        </div>
                    </form>

                </div>
            </div>

            <!-- Visualización de Proyectos -->
            <div class="col-sm-4">
                <form class="form-control">

                    <h2>Visualización de los proyectos</h2>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#proyecto1">Mole</a></li>
                        <li class="list-group-item"><a href="#proyecto2">Mermelada de tomate</a></li>
                        <li class="list-group-item"><a href="#proyecto3">Proyecto 3</a></li>
                        <li class="list-group-item"><a href="#proyecto4">Proyecto 4</a></li>
                    </ul>
                </form>
            </div>
        </div>

        <br>
        <div class="text-center">
            <a href="https://macuspana.tecnm.mx/" class="btn btn-link">Página ITSM</a>
        </div>

    </div>
    <!-- Footer -->
    <footer class="bg-light mt-auto text-center text-lg-start mt-3">
        <div class="text-center p-3">
            © 2025 Sistema de Gestión de Proyectos de Alimentaria: 
            <a class="text-dark" href="https://macuspana.tecnm.mx/">macuspana.tecnm.mx</a>
        </div>
    </footer>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function (event) {
            event.preventDefault();
            
            let formData = new FormData(this);

            fetch("login.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    window.location.href = data.redirect;
                } else {
                    document.getElementById("loginMessage").innerText = data.message;
                }
            })
            .catch(error => console.error("Error:", error));
        });
    </script>

</body>
</html>


