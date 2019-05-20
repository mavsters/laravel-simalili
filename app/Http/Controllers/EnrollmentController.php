<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use App\Models\Matricula;
use App\Models\TipoPersona;

class EnrollmentController extends Controller
{
    //
    public function enrollments()
    {
        $typeUser = self::getDataBasic()['typeUser'];
        $nameView = self::getDataBasic()['name'] . ".enrollment";
        return
            view($nameView,
                compact('title', 'typeUser'));

    }

    function create()
    {
        $crud = true;
        $parentesco = TipoPersona::all();
        $grade = Grado::all();
        return
            view('enrollments.create', compact('crud', 'grade', 'parentesco'));
    }

    public function store()
    {

        /* array:16 [▼
  "_token" => "EwC7mEYnYNKSS6l6iNRjYMoObRyBwlaDrJvS9A1U"
  "tipo_matricula" => "Nuevo"

  "id_grado" => "123123"

  "nombre" => "1"
  "apellido" => "2"
  "cedula" => "3"
  "telefono" => "4"
  "parentesco" => "Acudiente"

  "nombre_est" => "5"
  "apellido_est" => "6"
  "doc_id" => "Cedula de Ciudadania"
  "num_id" => "7"
  "lugar_nac" => "8"
  "fecha_nac" => "05/20/2019"
  "edad" => "9"
  "religion" => "10"

]*/


        $data = request()->validate([
            'nombre' => 'required',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio'
        ]);
        Grado::create([
            'nombre' => $data['nombre'],
        ]);
        return redirect()->back();
    }

    public function edit(Matricula $enrollment)
    {
        $crud = true;
        return view('enrollments.edit', ['enrollment' => $enrollment], compact('crud'));
    }

}
