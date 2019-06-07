<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //

    protected $table = "persona";

    protected $fillable = [
        "nombre",
        "apellido",
        "cedula",
        "telefono",
        "parentesco",

    ];
}
