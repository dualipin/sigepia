<div class="container my-5">
    <h1 class="mb-4 text-center">Listado de Estudiantes</h1>
    <div class="mb-4">
        <?php if (isset($components)) require_once $components; ?>
    </div>
    <?php if (isset($students) && count($students)): ?>
        <table class="table table-striped table-bordered">
            <thead class="thead text-light text-center">
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo Electrónico</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= htmlspecialchars($student['enroll']) ?></td>
                        <td><?= htmlspecialchars($student['nm']) ?></td>
                        <td><?= htmlspecialchars($student['ps'] . ' ' . $student['ms']) ?></td>
                        <td><?= htmlspecialchars($student['email']) ?></td>
                        <td><?= htmlspecialchars($student['birth']) ?></td>
                        <?php if ($_SESSION['user']['role'] == 'careermanager'): ?>
                            <td>
                                <a href="/students/edit/<?= $student['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                            <td>
                                <a href="/students/edit/<?= $student['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="/students/delete/<?= $student['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        <?php endif ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-primary text-center" role="alert">
            No hay estudiantes registrados.
        </div>
    <?php endif ?>
</div>