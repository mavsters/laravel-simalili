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

        factory(Docente::class, 1)->create();

        factory(User::class)->create([
            'email' => 'admin@admin.test',
            'id_tipousuario' => 1,
            'id_docente' => 1,
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }


}
