<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsignaturaCurso extends Model
{
    //
    protected $table = 'asignaturacurso';

    protected $fillable = ['id_curso', 'id_asignatura'];


    /*
    function id_curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }

    function id_asignatura()
    {
        return $this->belongsTo(Asignatura::class, 'id_asignatura');
    }

    public function subjects()
    {
        return $this->hasMany(Asignatura::class);
    }

    public function courses()
    {
        return $this->hasMany(Curso::class);
    }
*/
}
