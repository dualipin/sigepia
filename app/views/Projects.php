<?php
// Archivo: /d:/source/sigepia/app/views/Proyectos.php

// Simulación de datos de proyectos de industrias alimentarias
$proyectos = [
    ['id' => 1, 'nombre' => 'Proyecto A', 'descripcion' => 'Desarrollo de nuevos productos lácteos', 'estado' => 'En progreso'],
    ['id' => 2, 'nombre' => 'Proyecto B', 'descripcion' => 'Optimización de procesos de envasado', 'estado' => 'Completado'],
    ['id' => 3, 'nombre' => 'Proyecto C', 'descripcion' => 'Investigación en conservantes naturales', 'estado' => 'Pendiente'],
];

?>

<div class="container my-5">
    <h1 class="mb-4 text-center">Listado de Proyectos - Industrias Alimentarias</h1>
    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-primary text-center">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proyectos as $proyecto): ?>
                    <tr>
                        <td class="fw-bold"><?= htmlspecialchars($proyecto['nombre']) ?></td>
                        <td><?= htmlspecialchars($proyecto['descripcion']) ?></td>
                        <td class="text-center">
                            <span class="badge 
                                <?= $proyecto['estado'] === 'Completado' ? 'bg-success' : 
                                    ($proyecto['estado'] === 'En progreso' ? 'bg-warning text-dark' : 'bg-secondary') ?>">
                                <?= htmlspecialchars($proyecto['estado']) ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>