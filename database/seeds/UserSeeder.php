<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Secretaría
        factory(User::class, 10)->create([
            'id_tipousuario' => 2
        ]);
        // Directivo
        factory(User::class, 10)->create([
            'id_tipousuario' => 1
        ]);
    }


}
