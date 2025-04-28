<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= INITIAL_ROUTE ?>/assets/css/bootstrap.css">
    <link rel="icon" href="<?= INITIAL_ROUTE ?>/assets/img/icon.png" type="image/png">
    <?= $headers ?? '' ?>

    <title><?= $titulo ?? 'SIGEPIA' ?></title>
</head>

<body>
    <?php
    if (isset($view) && file_exists($view)) {
        require_once $view;
    } else {
        echo "No se encontró la vista especificada.";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>