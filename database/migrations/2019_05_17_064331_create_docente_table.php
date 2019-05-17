<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('nombre_completo',50)->nullable();
            $table->string('lugar_nac',30)->nullable();
            $table->integer('edad')->nullable();
            $table->string('religion',15)->nullable();
            $table->string('titulo_prof',30)->nullable();
            $table->string('tipo_documento',30)->nullable();
            $table->integer('number_id')->nullable();
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
