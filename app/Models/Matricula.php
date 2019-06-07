<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    //
    protected $table = 'matricula';

    protected $fillable = [

        "tipo_matricula",
        'id_grado',
        'id_requisito',
        'id_estudiante',
        'id_acudiente'

    ];
}
