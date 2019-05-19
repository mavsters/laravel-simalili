<?php

use App\Models\TipoPersona;
use Illuminate\Database\Seeder;

class TypePersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add Data Type
        TipoPersona::create(
            [
                'tipo_persona' => 'Madre',
            ]
        );
        TipoPersona::create(
            [
                'tipo_persona' => 'Padre',
            ]
        );
        TipoPersona::create(
            [
                'tipo_persona' => 'Acudiente',
            ]
        );
    }
}
