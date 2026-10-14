<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Proyectos de Programación</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos personalizados para darle un toque extra al "Diseño 5" -->
    <style>
        .hero-section {
            background-color: #f8f9fa;
            padding: 4rem 0;
            border-bottom: 2px solid #e9ecef;
        }
        .profile-img {
            width: 220px;
            height: 220px;
            object-fit: cover;
            border: 5px solid #0d6efd;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
        }
        .module-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 12px;
        }
        .module-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
        }
        .data-list li {
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
    </style>
</head>
<body class="bg-light">

<main>
    <!-- Sección de Presentación (Datos Personales) -->
    <section class="hero-section text-center text-md-start">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                
                <!-- Columna de la Foto -->
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <!-- Nota: Cambia 'tu_foto.jpg' por el nombre real de tu imagen dentro de la carpeta public/assets/img/ -->
                    <img src="<?= base_url('assets/img/tu_foto.jpg') ?>" alt="Foto de Francisco Javier" class="rounded-circle profile-img">
                </div>
                
                <!-- Columna de la Información -->
                <div class="col-md-7">
                    <span class="badge bg-primary px-3 py-2 mb-3 fs-6 rounded-pill">Diseño 5</span>
                    <h1 class="display-5 fw-bold text-dark mb-2">Francisco Javier Godoy Espinoza</h1>
                    <p class="lead text-secondary fw-semibold mb-4 border-bottom pb-3">Profesorado en Computación e Informática</p>
                    
                    <ul class="list-unstyled data-list text-dark">
                        <li><strong>Carné:</strong> 201900209</li>
                        <li><strong>Curso:</strong> Proyectos de Programación</li>
                        <li><strong>Fecha de Entrega:</strong> 14/10/2026</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección de Navegación a las Páginas (CRUDs) -->
    <section class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Gestión de Biblioteca</h2>
            <p class="text-muted">Selecciona el módulo al que deseas ingresar</p>
        </div>

        <div class="row g-4 justify-content-center">
            
            <!-- Tarjeta Libros -->
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 module-card border-0 shadow-sm border-top border-primary border-4">
                    <div class="card-body text-center p-4">
                        <div class="display-4 mb-3">📚</div>
                        <h4 class="card-title fw-bold text-primary">Libros</h4>
                        <p class="card-text text-muted mb-4">Catálogo general de libros, precios y detalles.</p>
                        <a href="<?= base_url('libros') ?>" class="btn btn-outline-primary w-100 stretched-link fw-bold">Administrar</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta Editoriales -->
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 module-card border-0 shadow-sm border-top border-success border-4">
                    <div class="card-body text-center p-4">
                        <div class="display-4 mb-3">🏢</div>
                        <h4 class="card-title fw-bold text-success">Editoriales</h4>
                        <p class="card-text text-muted mb-4">Información y contacto de casas editoriales.</p>
                        <a href="<?= base_url('editoriales') ?>" class="btn btn-outline-success w-100 stretched-link fw-bold">Administrar</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta Autores -->
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 module-card border-0 shadow-sm border-top border-warning border-4">
                    <div class="card-body text-center p-4">
                        <div class="display-4 mb-3">✍️</div>
                        <h4 class="card-title fw-bold text-warning">Autores</h4>
                        <p class="card-text text-muted mb-4">Registro de escritores y sus biografías.</p>
                        <a href="<?= base_url('autores') ?>" class="btn btn-outline-warning w-100 stretched-link fw-bold">Administrar</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta Países -->
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 module-card border-0 shadow-sm border-top border-danger border-4">
                    <div class="card-body text-center p-4">
                        <div class="display-4 mb-3">🌎</div>
                        <h4 class="card-title fw-bold text-danger">Países</h4>
                        <p class="card-text text-muted mb-4">Catálogo de países de origen de los autores.</p>
                        <a href="<?= base_url('paises') ?>" class="btn btn-outline-danger w-100 stretched-link fw-bold">Administrar</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<!-- Bootstrap 5 JS Bundle (Necesario si agregas modales, dropdowns o tooltips) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>