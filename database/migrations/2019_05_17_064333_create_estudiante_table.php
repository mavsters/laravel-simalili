<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('nombre_est',50)->nullable();
            $table->string('apellido_est',50)->nullable();
            $table->string('doc_id',100)->nullable();
            $table->integer('num_id')->nullable();
            $table->string('lugar_nac',15)->nullable();
            $table->date('fecha_nac')->nullable();
            $table->integer('edad')->nullable();
            $table->string('religion',15)->nullable();
            $table->string('nombre_tutor',50)->nullable();
            $table->string('tipo_est',10)->nullable();
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
