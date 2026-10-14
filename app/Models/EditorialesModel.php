<?php

namespace App\Models;

use CodeIgniter\Model;

class EditorialesModel extends Model
{
    protected $table            = 'editoriales';
    protected $primaryKey       = 'id';
    
    protected $allowedFields    = [
        'nombre', 
        'direccion', 
        'telefono', 
        'email', 
        'url'
    ];
}