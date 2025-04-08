<div class="container py-5">
    <?php if (!empty($projects) && is_array($projects)): ?>
        <?php foreach ($projects as $project): ?>
            <?php if (is_array($project)): ?>
                <div class="project card mb-3">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo htmlspecialchars($project['name']); ?></h2>
                        <p class="card-text"><?php echo htmlspecialchars($project['description']); ?></p>
                        <p class="card-text"><small class="text-muted">Created at: <?php echo htmlspecialchars($project['created_at']); ?></small></p>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No se encontraron proyectos.</p>
    <?php endif; ?>
</div>