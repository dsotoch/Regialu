<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grupoalumnos extends Model
{
    protected $fillable = [
        'alumno_id',
        'grupo_id',
        'horario_id',
        'user_id'
    ];
}
