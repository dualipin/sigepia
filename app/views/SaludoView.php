<?php ob_start(); ?>
<div id="saludo"></div>

<form method="post">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Saludar</button>
</form>


<script>
    const saludoDiv = document.getElementById('saludo');
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar el envío del formulario por defecto

        const formData = new FormData(form);
        fetch('/saludo', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                saludoDiv.innerHTML = `<h1 class="h6">Hola ${data}!</h1>`;
            })
            .catch(error => console.error('Error:', error));
    });
</script>

<?php $contenido = ob_get_clean(); ?>