<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    //
    protected $table = 'asignatura';
    protected $fillable = [
        'id_docente', 'nombre_asignatura', 'estado'
    ];

    function id_docente()
    {
        return $this->belongsTo(Docente::class, 'id_docente');
    }
}
