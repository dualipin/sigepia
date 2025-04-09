<div class="container-md pb-5 pt-4">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Sistema de Gestión de Proyectos de Alimentaria</h1>
        </div>
    </div>

    <div class="row align-items-center my-4">
        <div class="col-sm-8">
            <div id="carouselExampleCaptions" class="carousel slide bg-secondary rounded-4 overflow-hidden shadow-sm" style="height: 20em;" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="height: 100%;">
                    <div class="carousel-item active" style="height: 100%;">
                        <img src="<?= ASSETS_IMG ?>/industria_alimentaria.jpg" class="d-block w-100 h-100 object-fit-cover" alt="...">
                        <div class="carousel-caption d-block bg-dark bg-opacity-50 rounded p-2">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 100%;">
                        <img src="<?= ASSETS_IMG ?>/industria-alimenticia-dr.jpg" class="d-block w-100 h-100 object-fit-cover" alt="...">
                        <div class="carousel-caption d-block bg-dark bg-opacity-50 rounded p-2">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 100%;">
                        <img src="<?= ASSETS_IMG ?>/seguridad.png" class="d-block w-100 h-100 object-fit-cover" alt="...">
                        <div class="carousel-caption d-block bg-dark bg-opacity-50 rounded p-2">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <div class="col-sm-4">
            <form id="loginForm" class="form-control">
                <h2>Inicio de Sesión</h2>
                <div class="mb-3">
                    <label for="Usuario" class="form-label">Usuario</label>
                    <input type="text" id="Usuario" oninput="validarInput(this)" name="usuario" placeholder="Escribe tu usuario"
                        class="form-control" maxlength="13" minlength="13" required>
                    <p id="resultado"></p>
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
        <div class="row mt-5">
            <div class="col-sm-8 mx-auto">
                <h2>Visualización de los proyectos</h2>
                <ul class="list-group">
                    <?php if (isset($projects) && count($projects) > 0): ?>
                        <?php foreach ($projects as $project): ?>
                            <li class="list-group-item"><?= $project['name'] ?></li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li class="list-group-item">No hay proyectos disponibles</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="https://macuspana.tecnm.mx/" class="btn btn-link text-muted text-decoration-none">Página ITSM</a>
    </div>
</div>

<script>
    //Función para validar un RFC
    // Devuelve el RFC sin espacios ni guiones si es correcto
    // Devuelve false si es inválido
    // (debe estar en mayúsculas, guiones y espacios intermedios opcionales)
    function rfcValido(rfc, aceptarGenerico = true) {
        const re = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
        var validado = rfc.match(re);

        if (!validado) //Coincide con el formato general del regex?
            return false;

        //Separar el dígito verificador del resto del RFC
        const digitoVerificador = validado.pop(),
            rfcSinDigito = validado.slice(1).join(''),
            len = rfcSinDigito.length,

            //Obtener el digito esperado
            diccionario = "0123456789ABCDEFGHIJKLMN&OPQRSTUVWXYZ Ñ",
            indice = len + 1;
        var suma,
            digitoEsperado;

        if (len == 12) suma = 0
        else suma = 481; //Ajuste para persona moral

        for (var i = 0; i < len; i++)
            suma += diccionario.indexOf(rfcSinDigito.charAt(i)) * (indice - i);
        digitoEsperado = 11 - suma % 11;
        if (digitoEsperado == 11) digitoEsperado = 0;
        else if (digitoEsperado == 10) digitoEsperado = "A";

        //El dígito verificador coincide con el esperado?
        // o es un RFC Genérico (ventas a público general)?
        if ((digitoVerificador != digitoEsperado) &&
            (!aceptarGenerico || rfcSinDigito + digitoVerificador != "XAXX010101000"))
            return false;
        else if (!aceptarGenerico && rfcSinDigito + digitoVerificador == "XEXX010101000")
            return false;
        return rfcSinDigito + digitoVerificador;
    }


    //Handler para el evento cuando cambia el input
    // -Lleva la RFC a mayúsculas para validarlo
    // -Elimina los espacios que pueda tener antes o después
    function validarInput(input) {
        var rfc = input.value.trim().toUpperCase(),
            resultado = document.getElementById("resultado"),
            valido;

        var rfcCorrecto = rfcValido(rfc); // ⬅️ Acá se comprueba

        if (rfcCorrecto) {
            valido = "Válido";
            resultado.classList.add("text-success");
            resultado.classList.remove("text-danger");
        } else {
            valido = "No válido"
            resultado.classList.add("text-danger");
            resultado.classList.remove("text-success");
        }

        resultado.innerText = "Formato: " + valido;
    }
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        event.preventDefault();

        let usuario = document.getElementById("Usuario").value.trim();
        let password = document.getElementById("password").value.trim();
        let loginMessage = document.getElementById("loginMessage");

        // Clear previous messages
        loginMessage.innerText = "";

        // Basic validations
        if (usuario === "" || password === "") {
            loginMessage.innerText = "Por favor, complete todos los campos.";
            return;
        }

        if (usuario.length !== 13) {
            loginMessage.innerText = "El usuario debe tener exactamente 13 caracteres.";
            return;
        }

        if (!rfcValido(usuario)) {
            loginMessage.innerText = "El RFC no es válido.";
            return;
        }

        let formData = new FormData(this);

        fetch("<?= htmlspecialchars(INITIAL_ROUTE, ENT_QUOTES, 'UTF-8') ?>/auth/login", {
                method: "POST",
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.json();
            })
            .then(data => {
                if (data.status === "success") {
                    window.location.href = data.to;
                } else {
                    loginMessage.innerText = data.message;
                }
            })
            .catch(error => {
                console.error("Error:", error);
                loginMessage.innerText = "Ocurrió un error al procesar la solicitud.";
            });
    });
</script>