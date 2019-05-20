<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeyCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('curso', function (Blueprint $table) {
            $table->foreign('id_grado')->references('id')->on('grado');
        });

        Schema::table('asignatura', function ($table) {
            $table->unsignedInteger('id_docente');
            $table->foreign('id_docente')->references('id')->on('docente');
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
        Schema::table('curso', function (Blueprint $table) {
            $table->dropForeign(['id_grado']);
            $table->dropColumn('id_grado');
        });

        Schema::table('asignatura', function (Blueprint $table) {
            $table->dropForeign(['id_docente']);
            $table->dropColumn('id_docente');
        });
    }
}
