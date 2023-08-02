<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ies_padre extends Model
{
    use HasFactory;
    protected $table = 'ies_padre';
    protected $primaryKey = 'codigo-institucion';
    protected $fillable = ['codigo-institucion', 'nombre-institucion', 'siglas-institucion', 'logo-institucion', 'costo-inscripcion'];
}
