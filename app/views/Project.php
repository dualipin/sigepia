<section class="container mt-4">
    <h2 class="text-primary">Detalles del proyecto <span class="fw-semibold"><?= htmlspecialchars($project['name']) ?? '' ?></span></h2>
    <p class="text-muted"><?= htmlspecialchars($project['description'] ?? 'Descripción no disponible.'); ?></p>

    <?php if (!empty($project['goals'])): ?>
        <ul class="list-group">
            <?php foreach ($project['goals'] as $goal): ?>
                <li class="list-group-item"><?= htmlspecialchars($goal); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p class="text-warning">No hay objetivos disponibles para este proyecto.</p>
    <?php endif; ?>
</section>
