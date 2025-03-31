<?php $titulo = 'Inicio de Sesión';
ob_clean(); // Limpiar el buffer de salida
ob_start(); // Iniciar el buffer de salida
?>
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
        });
        calendar.render();
    });
</script>
<?php $headers = ob_get_clean(); // Obtener el contenido del buffer y limpiar el buffer 
?>

<?php ob_start(); // Iniciar el buffer de salida 
?>
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
                <ul id="ultimas-noticias" class="list-unstyled d-flex gap-4">

                </ul>
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
            <div class="row">
                <form id="loginForm" class="form-control">
                    <h2>Inicio de Sesión</h2>
                    <div class="mb-3">
                        <label for="Usuario" class="form-label">Usuario</label>
                        <input type="text" id="Usuario" name="Usuario" placeholder="Escribe tu usuario"
                            class="form-control" maxlength="8" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="Escribe tu contraseña"
                            class="form-control" required>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-outline-primary">Ingresar</button>
                    </div>
                    <p id="loginMessage" class="text-danger text-center"></p>
                </form>
            </div>
        </div>

        <!-- Visualización de Proyectos -->
        <div class="col-sm-4">
            <form class="form-control">
                <h2>Visualización de los proyectos</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="moleinfo.html">Mole</a></li>
                    <li class="list-group-item"><a href="mermeinfo.html">Mermelada de tomate</a></li>
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

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-3">
        <div class="text-center p-3">
            © 2025 Sistema de Gestión de Proyectos de Alimentaria:
            <a class="text-dark" href="https://macuspana.tecnm.mx/">macuspana.tecnm.mx</a>
        </div>
    </footer>
</div>

<script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
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

<script>
    async function fetchNoticias() {
        try {
            const response = await fetch('/noticias/latest')
            if (!response.ok) {
                throw new Error('Ocurrió un error al consultar las ultimas noticias, posible error de red' + response.statusText);
            }

            /** @type {{ titulo: string, contenido: string }[]} */
            const data = await response.json();

            const noticiasList = document.getElementById('ultimas-noticias');
            noticiasList.innerHTML = ''; // Limpiar la lista antes de agregar nuevas noticias

            data.forEach(noticia => {
                const li = document.createElement('li');
                li.className = 'list-group-item';
                li.innerHTML = `<strong>${noticia.titulo}</strong> - ${noticia.contenido}`;
                noticiasList.appendChild(li);
            });
           
        } catch (error) {
            console.error("Error al consultar noticias:", error);
        }
    }

    fetchNoticias(); // Llamar a la función para cargar las noticias al cargar la página
</script>

<?php $contenido = ob_get_clean(); // Obtener el contenido del buffer y limpiar el buffer 
?>