<?php

namespace App\Models\ViewModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libros2 extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected  $table = 'libros';

    protected $fillable = [
        'nombre',
        'desc',
        'genero'
    ];
}
