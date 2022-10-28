<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibroModel extends Model
{
    protected $fillable = [
        'LibroId',
        'LibroNombre',
        'LibroDescripcion',
        'LibroGenero'
    ];
}
