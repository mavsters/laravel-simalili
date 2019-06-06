<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisito', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_requisito', 30);
            $table->boolean('pago_inscripcion');
            $table->boolean('paz_y_salvo');
            $table->boolean('simat');
            $table->boolean('dil_form_inscrip');
            $table->boolean('aprob_entrevista');
            $table->boolean('eps');
            $table->boolean('acta_matricula');
            $table->boolean('contrato_matricula');
            $table->boolean('reg_not_ano_ante');
            $table->boolean('renov_con_acta');
            $table->boolean('pago_matricula');
            $table->boolean('reg_civil');
            $table->boolean('fotos');
            $table->boolean('carnet_vacuna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requisito');
    }
}
