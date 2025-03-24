<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitácora de Pruebas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-3">Bitácora de Pruebas</h2>
        
        <input type="text" id="searchInput" class="form-control mb-3" placeholder="Buscar por nombre...">
        
        <button id="exportBtn" class="btn btn-success mb-3">Exportar a CSV</button>
        
        <table class="table table-striped" id="bitacoraTable">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Responsable</th>
                    <th>Descripción</th>
                    <th>Resultados</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'conexion.php';
                
                $sql = "SELECT nombre, fecha, responsable, descripcion, resultados FROM bitacora";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['nombre']}</td>
                                <td>{$row['fecha']}</td>
                                <td>{$row['responsable']}</td>
                                <td>{$row['descripcion']}</td>
                                <td>{$row['resultados']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>No hay registros</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function(){
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#bitacoraTable tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            $("#exportBtn").on("click", function() {
                let csvContent = "data:text/csv;charset=utf-8,";
                $("#bitacoraTable tr").each(function() {
                    let row = [];
                    $(this).find("th, td").each(function() {
                        row.push($(this).text());
                    });
                    csvContent += row.join(",") + "\n";
                });
                let encodedUri = encodeURI(csvContent);
                let link = document.createElement("a");
                link.setAttribute("href", encodedUri);
                link.setAttribute("download", "bitacora.csv");
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>