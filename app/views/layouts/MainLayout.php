<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de Gestión de Proyectos Agropecuarios (SIGEPIA)">
    <meta name="author" content="SIGEPIA Team">
    <meta name="keywords" content="SIGEPIA, Sistema de Gestión de Proyectos, Alimentaria">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title><?= isset($titulo) ? $titulo : 'SIGEPIA' ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?= $headers ?? '' ?>
</head>

<body>
    <?= $contenido ?? '' ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>