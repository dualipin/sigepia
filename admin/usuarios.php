<!-- Tabla para mostrar alumnos -->
<div class="card p-4 mb-4">
    <h4>Lista de Alumnos</h4>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>RFC</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Estado</th>
                <th>Municipio</th>
                <th>Localidad</th>
                <th>Colonia</th>
                <th>Código Postal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM alumnos";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['rfc']}</td>
                        <td>{$row['nom']}</td>
                        <td>{$row['app']}</td>
                        <td>{$row['apm']}</td>
                        <td>{$row['tel']}</td>
                        <td>{$row['corr']}</td>
                        <td>{$row['dir']}</td>
                        <td>{$row['est']}</td>
                        <td>{$row['mun']}</td>
                        <td>{$row['loc']}</td>
                        <td>{$row['col']}</td>
                        <td>{$row['cp']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Tabla para mostrar docentes -->
<div class="card p-4">
    <h4>Lista de Docentes</h4>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>RFC</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Estado</th>
                <th>Municipio</th>
                <th>Localidad</th>
                <th>Colonia</th>
                <th>Código Postal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM docentes";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['rfc']}</td>
                        <td>{$row['nom']}</td>
                        <td>{$row['app']}</td>
                        <td>{$row['apm']}</td>
                        <td>{$row['tel']}</td>
                        <td>{$row['corr']}</td>
                        <td>{$row['dir']}</td>
                        <td>{$row['est']}</td>
                        <td>{$row['mun']}</td>
                        <td>{$row['loc']}</td>
                        <td>{$row['col']}</td>
                        <td>{$row['cp']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</div>