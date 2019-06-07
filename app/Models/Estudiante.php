<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //
    protected $table = 'estudiante';

    protected $fillable = ['nombre_est',
        "nombre_est",
        "apellido_est",
        "doc_id",
        "num_id",
        "lugar_nac",
        "fecha_nac",
        "edad",
        "religion",
        "genero",
        "tipo_est",
        "nombre_tutor"
    ];
}
