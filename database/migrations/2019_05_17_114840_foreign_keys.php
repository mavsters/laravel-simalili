<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('curso', function (Blueprint $table) {
            $table->foreign('id_grado')->references('id')->on('grado');
        });

        Schema::table('asignaturacurso',function($table){
            $table->foreign('id_curso')->references('id')->on('curso');
            $table->foreign('id_asignatura')->references('id')->on('asignatura');
        });

        Schema::table('directorcurso',function($table){
            $table->foreign('id_docente')->references('id')->on('docente');
            $table->foreign('id_curso')->references('id')->on('curso');
        });

        Schema::table('asignatura',function($table){
            $table->unsignedInteger('id_docente');
            $table->foreign('id_docente')->references('id')->on('docente');
        });

        Schema::table('users',function($table){
            $table->unsignedInteger('id_tipousuario')->default('3');
            $table->foreign('id_tipousuario')->references('id')->on('tipousuario');
        });

        Schema::table('requisito',function($table){
            $table->unsignedInteger('id_grado');
            $table->foreign('id_grado')->references('id')->on('grado');
            $table->unsignedInteger('id_estudiante');
            $table->foreign('id_estudiante')->references('id')->on('estudiante');
        });

        Schema::table('matricula',function($table){
            $table->unsignedInteger('id_grado');
            $table->foreign('id_grado')->references('id')->on('grado');

            $table->unsignedInteger('id_requisito');
            $table->foreign('id_requisito')->references('id')->on('requisito');

            $table->unsignedInteger('id_estudiante');
            $table->foreign('id_estudiante')->references('id')->on('estudiante');

            $table->unsignedInteger('id_acudiente');
            $table->foreign('id_acudiente')->references('id')->on('persona');
        });

        Schema::table('estudiante',function ($table){
            $table->unsignedInteger('id_persona');
            $table->foreign('id_persona')->references('id')->on('persona');
        });

        Schema::table('tipopersona',function ($table){
            $table->unsignedInteger('id_persona');
            $table->foreign('id_persona')->references('id')->on('persona');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
