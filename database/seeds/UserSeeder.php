<?php

use App\Models\Docente;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        factory(Docente::class, 100)->create();

        factory(User::class)->create([
            'email' => 'admin@admin.test',
            'id_tipousuario' => 1,
            'id_docente' => 1,
        ]);
        // Secretaría
        factory(User::class)->create([
            'id_tipousuario' => 2,
            'id_docente' => 2,

        ]);
        // Directivo
        factory(User::class)->create([
            'id_tipousuario' => 1,
            'id_docente' => 3,
        ]);


        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }


}
