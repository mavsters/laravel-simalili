<?php

use App\Models\Tipousuario;
use Illuminate\Database\Seeder;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add Data Type
        Tipousuario::create(
            [
                'tipo_usuario' => 'Directivo',
            ]
        );
        Tipousuario::create(
            [
                'tipo_usuario' => 'Secretaría'
            ]
        );
        Tipousuario::create(
            [
                'tipo_usuario' => 'Normal'
            ]
        );
    }
}
