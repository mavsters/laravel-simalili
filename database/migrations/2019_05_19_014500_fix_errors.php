<?php

use Illuminate\Database\Migrations\Migration;

class FixErrors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*/

        Schema::dropIfExists('persona');
        Schema::dropIfExists('estudiante');
        Schema::dropIfExists('matricula');
        Schema::dropIfExists('requisito');
        Schema::dropIfExists('users');
        Schema::dropIfExists('asignatura');
        Schema::dropIfExists('directorcurso');
        Schema::dropIfExists('curso');*/
    }
}
