<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Costos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center text-primary mb-4">Calculadora de Costos</h2>
            
            <form id="costCalculator">
                <!-- Costos de Materia Prima -->
                <div class="mb-3">
                    <label class="form-label">Costo de Materia Prima ($)</label>
                    <input type="number" class="form-control" id="costoMateriaPrima" min="0" step="0.01">
                </div>
                
                <!-- Costos de Mano de Obra -->
                <div class="mb-3">
                    <label class="form-label">Costo de Mano de Obra ($)</label>
                    <input type="number" class="form-control" id="costoManoObra" min="0" step="0.01">
                </div>
                
                <!-- Costos de Procesamiento -->
                <div class="mb-3">
                    <label class="form-label">Costo de Procesamiento ($)</label>
                    <input type="number" class="form-control" id="costoProcesamiento" min="0" step="0.01">
                </div>
                
                <!-- Costos de Empaque -->
                <div class="mb-3">
                    <label class="form-label">Costo de Empaque ($)</label>
                    <input type="number" class="form-control" id="costoEmpaque" min="0" step="0.01">
                </div>
                
                <!-- Costos Indirectos -->
                <div class="mb-3">
                    <label class="form-label">Costos Indirectos ($)</label>
                    <input type="number" class="form-control" id="costoIndirectos" min="0" step="0.01">
                </div>
                
                <!-- Margen de Ganancia -->
                <div class="mb-3">
                    <label class="form-label">Margen de Ganancia (%)</label>
                    <input type="number" class="form-control" id="margenGanancia" min="0" step="1">
                </div>
                
                <button type="button" class="btn btn-primary w-100" onclick="calcularCosto()">Calcular Costo</button>
            </form>
            
            <div class="mt-4 text-center">
                <h4 class="text-success">Costo Total: $<span id="costoTotal">0.00</span></h4>
                <h4 class="text-info">Precio de Venta Sugerido: $<span id="precioVenta">0.00</span></h4>
            </div>
        </div>
    </div>
    
    <script>
        function calcularCosto() {
            let materiaPrima = parseFloat(document.getElementById("costoMateriaPrima").value) || 0;
            let manoObra = parseFloat(document.getElementById("costoManoObra").value) || 0;
            let procesamiento = parseFloat(document.getElementById("costoProcesamiento").value) || 0;
            let empaque = parseFloat(document.getElementById("costoEmpaque").value) || 0;
            let indirectos = parseFloat(document.getElementById("costoIndirectos").value) || 0;
            let margen = parseFloat(document.getElementById("margenGanancia").value) || 0;

            let costoTotal = materiaPrima + manoObra + procesamiento + empaque + indirectos;
            let precioVenta = costoTotal * (1 + margen / 100);

            document.getElementById("costoTotal").textContent = costoTotal.toFixed(2);
            document.getElementById("precioVenta").textContent = precioVenta.toFixed(2);
        }
    </script>
</body>
</html>
