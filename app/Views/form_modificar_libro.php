<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Libro</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                
                <!-- Tarjeta del Formulario -->
                <div class="card shadow border-0 border-top border-warning border-4">
                    <div class="card-header bg-white pb-0 border-0">
                        <h2 class="text-center fw-bold mt-3 text-warning">
                            <i class="bi bi-pencil-square"></i> Modificar Libro
                        </h2>
                    </div>
                    
                    <div class="card-body px-4 py-4">
                        <form action="<?=base_url('modificar_libro') ?>" method="post">
                            
                            <!-- Campo Oculto (Readonly) para el ID del libro -->
                            <div class="mb-3">
                                <label for="txt_id" class="form-label fw-bold text-muted">ID del Libro:</label>
                                <input type="number" name="txt_id" id="txt_id" class="form-control bg-light" value="<?= $datos['id']; ?>" readonly>
                                <div class="form-text">El ID no se puede modificar.</div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_titulo" class="form-label fw-bold">Título: </label>
                                <input type="text" name="txt_titulo" id="txt_titulo" class="form-control" value="<?= $datos['titulo']; ?>" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="txt_fecha_publicacion" class="form-label fw-bold">Fecha de Publicación: </label>
                                <input type="date" name="txt_fecha_publicacion" id="txt_fecha_publicacion" class="form-control" value="<?= $datos['fecha_publicacion']; ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_precio" class="form-label fw-bold">Precio (Q): </label>
                                <input type="number" step="0.01" name="txt_precio" id="txt_precio" class="form-control" value="<?= $datos['precio']; ?>">
                            </div>

<!-- Reemplaza el input txt_editorial_id con este bloque -->
                            <div class="mb-3">
                                <label for="txt_editorial_id" class="form-label fw-bold">Editorial: </label>
                                <select name="txt_editorial_id" id="txt_editorial_id" class="form-select" required>
                                    <option value="" disabled>Seleccione una editorial...</option>
                                    <?php foreach ($editoriales as $edit): ?>
                                        <option value="<?= $edit['id']; ?>" <?= ($datos['editorial_id'] == $edit['id']) ? 'selected' : ''; ?>>
                                            <?= $edit['nombre']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="txt_isbn" class="form-label fw-bold">ISBN: </label>
                                <input type="text" name="txt_isbn" id="txt_isbn" class="form-control" value="<?= $datos['isbn']; ?>">
                            </div>

                            <!-- Botones de Acción -->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="<?= base_url('libros') ?>" class="btn btn-secondary me-md-2">
                                    <i class="bi bi-x-circle"></i> Cancelar
                                </a>
                                <button type="submit" class="btn btn-warning fw-bold">
                                    <i class="bi bi-check-circle"></i> Actualizar Cambios
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>
</html>