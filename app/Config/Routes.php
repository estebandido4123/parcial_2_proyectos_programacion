<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

/* libros controladores */ 
$routes->get('libros', 'LibrosController::index_libros'); # muestra libros
$routes->post('agregar_libro', 'LibrosController::insertar'); # agrega libros nuevos
$routes->get('eliminar_libro/(:num)', 'LibrosController::eliminar/$1'); # elimina libros
$routes->get('buscar_libro/(:num)', 'LibrosController::buscar_libro/$1'); # busca los libros
$routes->post('modificar_libro', 'LibrosController::modificar_libro'); # modifica libros
/* ----Termina los controladores de libros----*/