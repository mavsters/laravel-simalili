<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_completo', 50);
            $table->string('lugar_nac', 30);
            $table->string('fecha_nac', 30);
            $table->integer('edad');
            $table->string('religion', 15);
            $table->string('titulo_prof', 30);
            $table->string('tipo_documento', 30);
            $table->string('genero', 30);
            $table->integer('number_id');
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
        Schema::dropIfExists('docente');
    }
}
