<?php

namespace App\Models;

use CodeIgniter\Model;

class PaisesModel extends Model
{
    protected $table            = 'paises';
    protected $primaryKey       = 'pais_id';
    protected $allowedFields    = [
        'nombre'
    ];
}