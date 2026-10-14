<?php

namespace App\Models;

use CodeIgniter\Model;

class AutoresModel extends Model
{
    protected $table            = 'autores';
    protected $primaryKey       = 'artista_id';
    
    protected $allowedFields    = [
        'nombre', 
        'apellido', 
        'fecha_nacimiento', 
        'fecha_muerte', 
        'pais_id'
    ];
}