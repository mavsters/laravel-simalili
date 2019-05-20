<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    protected $table = 'curso';

    protected $fillable = [
        'nombre_curso', 'id_grado'
    ];
}
