<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_est', 50);
            $table->string('apellido_est', 50);
            $table->string('doc_id', 100);
            $table->integer('num_id');
            $table->string('lugar_nac', 15);
            $table->date('fecha_nac');
            $table->integer('edad');
            $table->string('religion', 15);
            $table->string('genero', 15);
            $table->string('nombre_tutor', 50);
            $table->string('tipo_est', 10);
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
        Schema::dropIfExists('estudiante');
    }
}
