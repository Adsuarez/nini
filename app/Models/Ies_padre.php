<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ies_padre extends Model
{
    use HasFactory;
    protected $table = 'ies_padre';
    protected $primaryKey = 'codigo_institucion';
    protected $fillable = ['codigo_institucion', 'nombre_institucion', 'siglas_institucion', 'logo_institucion', 'costo_inscripcion'];
}
