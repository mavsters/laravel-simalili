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
        $data = request()->validate([
            'tipo_matricula' => 'required',
        ], [
            'tipo_matricula.required' => 'Seleccione un tipo de matricula'
        ]);
        $enrollment = Matricula::create([
            "tipo_matricula" => $data["tipo_matricula"]
        ]);


        /*
        array:25 [▼
  "_token" => "tjBilFVBjWqEbnFlhPVjyIMW1RA8rFJQ2hCHgNLW"
  "tipo_matricula" => "Nuevo"
  "id_grado" => "mavs"
  "parentesco" => "Tio"
  "madre_nombre" => "1"
  "madre_apellido" => "2"
  "madre_cedula" => "3"
  "madre_telefono" => "4"
  "padre_nombre" => "5"
  "padre_apellido" => "6"
  "padre_cedula" => "7"
  "padre_telefono" => "88"
  "acudiente_nombre" => "9"
  "acudiente_apellido" => "10"
  "acudiente_cedula" => "11"
  "acudiente_telefono" => "12"
  "nombre_est" => "13"
  "apellido_est" => "14"
  "genero" => "Hombre"
  "doc_id" => "Pasaporte"
  "num_id" => "15"
  "lugar_nac" => "16"
  "fecha_nac" => "05/28/2019"
  "edad" => "17"
  "religion" => "18"
]
        */


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
