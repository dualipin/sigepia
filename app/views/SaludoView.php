<div id="saludo"></div>

<form method="post">
    <input type="text" name="nombre" id="">
    <button type="submit">saludar</button>
</form>


<script>
    const saludoDiv = document.getElementById('saludo');
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Evitar el envío del formulario por defecto

        const formData = new FormData(form);
        fetch('/saludo', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                saludoDiv.innerHTML = `<h1>Hola ${data}!</h1    >`;
            })
            .catch(error => console.error('Error:', error));
    });
</script>