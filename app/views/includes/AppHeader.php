<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-md">
            <a class="navbar-brand" href="<?= INITIAL_ROUTE ?>/">
                <img src="<?= ASSETS_IMG ?>/icon.png" alt="">
                SIGEPIA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between " id="navbarNav">
                <ul class="navbar-nav">
                    <?php if (isset($_SESSION['user'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= INITIAL_ROUTE ?>/home/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Hola</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <div class="d-flex align-items-center gap-3">
                    <?php if (isset($_SESSION['user']['name'])): ?>
                        <span>Bienvenido, <?= htmlspecialchars($_SESSION['user']['name']) ?>!</span>
                        <a href="<?= INITIAL_ROUTE ?>/auth/logout/" class="btn btn-outline-danger btn-sm">Cerrar</a>
                    <?php else: ?>
                        <a href="/login.php" class="btn btn-outline-primary btn-sm">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>