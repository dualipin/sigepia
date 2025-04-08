<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= INITIAL_ROUTE ?>/assets/css/bootstrap.css">
    <link rel="icon" href="<?= INITIAL_ROUTE ?>/assets/img/icon.png" type="image/png">
    <?= $headers ?? '' ?>

    <title><?= $titulo ?? 'SIGEPIA' ?></title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include_once __DIR__ . '/../includes/AppHeader.php'; ?>
    <?php
    if (isset($view) && file_exists($view)) {
        require_once $view;
    } else {
        echo "No se encontró la vista especificada.";
    }
    ?>

    <footer class="bg-light text-center text-lg-start mt-auto">
        <div class="text-center p-3">
            © 2025 Sistema de Gestión de Proyectos de Alimentaria:
            <a class="text-dark" href="https://macuspana.tecnm.mx/">macuspana.tecnm.mx</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentUrl = window.location.pathname;
            const navLinks = document.querySelectorAll('#navbarNavItems .nav-link');

            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentUrl) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>