<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notas extends Model
{
    protected $fillable = [
        'user_id',
        'aula_id',
        'tipo',
        'unidad',
        'descripcion',
        'valor',
        'alumno_id',
        'area_id',
    ];
}
