<?php

namespace App\Models;

use CodeIgniter\Model;

class LibrosModel extends Model
{
    protected $table            = 'libros';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'titulo', 
        'fecha_publicacion', 
        'precio', 
        'editorial_id', 
        'isbn'
    ];
}