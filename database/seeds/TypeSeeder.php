<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add Data Type
        DB::table('tipousuario')->insert([
            'tipo_usuario' => 'Directivo'
        ]);
    }
}
