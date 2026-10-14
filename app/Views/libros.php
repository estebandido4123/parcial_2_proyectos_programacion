<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    <div class="container-fluid py-4 px-4">
        <h1 class="mb-4 fw-bold">Gestión de Libros</h1>

        <div class="mb-4">
            <!-- Modal Trigger -->
            <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-journal-plus me-1"></i> Agregar Libro
            </button>
            <a href="<?= base_url('/') ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left-circle me-1"></i> Regresar al Menú Principal
            </a>
        </div>

        <!-- Modal para Agregar Libro -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Libro</h1>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url('agregar_libro') ?>" method="post">
                            <div class="mb-3">
                                <label for="txt_titulo" class="form-label fw-bold">Título: </label>
                                <input type="text" name="txt_titulo" id="txt_titulo" class="form-control" placeholder="Ingrese el título del libro" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="txt_fecha_publicacion" class="form-label fw-bold">Fecha de Publicación: </label>
                                <input type="date" name="txt_fecha_publicacion" id="txt_fecha_publicacion" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="txt_precio" class="form-label fw-bold">Precio (Q): </label>
                                <input type="number" step="0.01" name="txt_precio" id="txt_precio" class="form-control" placeholder="0.00">
                            </div>

                            <div class="mb-3">
                                <label for="txt_editorial_id" class="form-label fw-bold">ID Editorial: </label>
                                <input type="number" name="txt_editorial_id" id="txt_editorial_id" class="form-control" placeholder="ID de la editorial">
                            </div>

                            <div class="mb-3">
                                <label for="txt_isbn" class="form-label fw-bold">ISBN: </label>
                                <input type="text" name="txt_isbn" id="txt_isbn" class="form-control" placeholder="Ej: 978-3-16-148410-0">
                            </div>

                            <button type="submit" class="btn btn-success w-100 mt-2">
                                <i class="bi bi-floppy"></i> Guardar Libro
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección de Cards -->
        <div class="row g-4">
            <?php foreach ($datos as $libro): ?>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card h-100 shadow-sm border-0 border-top border-primary border-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-secondary">ID: <?= $libro['id']; ?></span>
                                <span class="badge bg-success">Q. <?= number_format($libro['precio'], 2); ?></span>
                            </div>
                            <h5 class="card-title fw-bold text-primary mb-3">
                                <?= $libro['titulo']; ?>
                            </h5>
                            <p class="card-text mb-1"><strong>ISBN:</strong> <?= empty($libro['isbn']) ? 'N/A' : $libro['isbn']; ?></p>
                            <p class="card-text mb-1"><strong>Publicado:</strong> <?= empty($libro['fecha_publicacion']) ? 'N/A' : date('d/m/Y', strtotime($libro['fecha_publicacion'])); ?></p>
                            <p class="card-text mb-3"><strong>ID Editorial:</strong> <?= $libro['editorial_id']; ?></p>
                        </div>
                        <div class="card-footer bg-white border-0 pt-0 pb-3 d-flex justify-content-between">
                            <a href="<?=base_url('buscar_libro/').$libro['id'];?>" class="btn btn-outline-warning btn-sm w-100 me-2">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>
                            <a href="<?=base_url('eliminar_libro/').$libro['id'];?>" class="btn btn-outline-danger btn-sm w-100 ms-2" onclick="return confirm('¿Estás seguro de eliminar este libro?');">
                                <i class="bi bi-trash"></i> Eliminar
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
            <?php if(empty($datos)): ?>
                <div class="col-12 text-center py-5">
                    <p class="text-muted fs-5">No hay libros registrados actualmente.</p>
                </div>
            <?php endif; ?>
        </div>

    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>
</html>