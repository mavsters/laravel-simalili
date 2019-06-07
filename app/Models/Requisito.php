<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    //
    protected $table = 'requisito';

    protected $fillable = [
        "tipo_requisito",
        "pago_inscripcion",
        "paz_y_salvo",
        "simat",
        "dil_form_inscrip",
        "aprob_entrevista",
        "eps",
        "acta_matricula",
        "contrato_matricula",
        "reg_not_ano_ante",
        "renov_con_acta",
        "pago_matricula",
        "reg_civil",
        "fotos",
        "carnet_vacuna"];

}
