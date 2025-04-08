<header class="bg-light shadow-sm mb-4 sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-md">
            <a class="navbar-brand text-wrap" href="<?= INITIAL_ROUTE ?>/">
                <img src="<?= ASSETS_IMG ?>/icon.png" alt="Logo" class="me-2">
                SIGEPIA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php if (isset($_SESSION['user']['role']) && $_SESSION['user']['role'] === 'admin'): ?>
                    <?php include_once 'menu/AdminMenu.php'; ?>
                <?php elseif (isset($_SESSION['user']['role']) && $_SESSION['user']['role'] === 'student'): ?>
                    <?php include_once 'menu/StudentMenu.php'; ?>
                <?php else: ?>
                    <?php include_once 'menu/GuestMenu.php'; ?>
                <?php endif; ?>

                <div class="d-flex align-items-center gap-3">
                    <?php if (isset($_SESSION['user']['name'])): ?>
                        <span class="navbar-text">Bienvenido, <?= htmlspecialchars($_SESSION['user']['name']) ?>!</span>
                        <a href="<?= INITIAL_ROUTE ?>/auth/logout/" class="btn btn-outline-danger btn-sm">Cerrar Sesión</a>
                    <?php else: ?>
                        <a href="<?= INITIAL_ROUTE ?>/auth/login" class="btn btn-outline-primary btn-sm">Iniciar Sesión</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>