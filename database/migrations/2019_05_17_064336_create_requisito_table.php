<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('tipo_requisito',30)->nullable();
            $table->boolean('pago_inscripcion')->nullable();
            $table->boolean('paz_y_salvo')->nullable();
            $table->boolean('simat')->nullable();
            $table->boolean('dil_form_inscrip')->nullable();
            $table->boolean('aprob_entrevista')->nullable();
            $table->boolean('eps')->nullable();
            $table->boolean('acta_matricula')->nullable();
            $table->boolean('contrato_matricula')->nullable();
            $table->boolean('reg_not_ano_ante')->nullable();
            $table->boolean('renov_con_acta')->nullable();
            $table->boolean('pago_matricula')->nullable();
            $table->boolean('reg_civil')->nullable();
            $table->boolean('fotos')->nullable();
            $table->boolean('carnet_vacuna')->nullable();
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
