<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    //
    protected $table = 'docente';

    protected $fillable = [
        'nombre_completo',
        "lugar_nac",
        "fecha_nac",
        "edad",
        "religion",
        "titulo_prof",
        "tipo_documento",
        "number_id",
        "genero"
    ]; //only the field names inside the array can be mass-assign

}
