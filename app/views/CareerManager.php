<div class="container my-5">
    <h1 class="mb-4 text-center">Listado de Jefe de Carrera</h1>
    <div class="mb-4">
        <?php if (isset($components)) require_once $components; ?>
    </div>
    <?php if (isset($teachers) && count($teachers)): ?>
        <table class="table table-striped table-bordered">
            <thead class="thead text-light text-center">
                <tr>
                    <th>RFC</th>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Correo Electrónico</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teachers as $teacher): ?>
                    <tr>
                        <td><?= htmlspecialchars($teacher['rfc']) ?></td>
                        <td><?= htmlspecialchars($teacher['kn']) ?></td>
                        <td><?= htmlspecialchars($teacher['nm']) ?></td>
                        <td><?= htmlspecialchars($teacher['ps']) ?></td>
                        <td><?= htmlspecialchars($teacher['ms']) ?></td>
                        <td><?= htmlspecialchars($teacher['email']) ?></td>
                        <td><?= htmlspecialchars($teacher['birth']) ?></td>
                        <?php if ($_SESSION['user']['role'] == 'careermanager'): ?>
                            <td>
                                <a href="/teachers/edit/<?= $teacher['rfc'] ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="/teachers/delete/<?= $teacher['rfc'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        <?php endif ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-primary text-center" role="alert">
            No hay registros.
        </div>
    <?php endif ?>
</div>