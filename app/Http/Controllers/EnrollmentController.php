<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\Matricula;
use App\Models\Requisito;
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
            "id_grado" => "required",
            "requisito" => "required",
            "parentesco" => "required",
            "madre_nombre" => "required",
            "madre_apellido" => "required",
            "madre_cedula" => "required",
            "madre_telefono" => "required",
            "padre_nombre" => "required",
            "padre_apellido" => "required",
            "padre_cedula" => "required",
            "padre_telefono" => "required",
            "acudiente_nombre" => "required",
            "acudiente_apellido" => "required",
            "acudiente_cedula" => "required",
            "acudiente_telefono" => "required",
            "nombre_est" => "required",
            "apellido_est" => "required",
            "genero" => "required",
            "doc_id" => "required",
            "num_id" => "required",
            "lugar_nac" => "required",
            "fecha_nac" => "required",
            "edad" => "required",
            "religion" => "required"
        ]);


        $idGrado = Grado::where(
            'nombre', 'like', '%' . ($data['id_grado']) . '%'
        )->first()->id;

        $idRequisitos = Requisito::create([
            "tipo_requisito" => ($data["tipo_matricula"]),
            "pago_incripcion" => array_key_exists(0, $data["requisito"]),
            "paz_y_salvo" => array_key_exists(1, $data["requisito"]),
            "simat" => array_key_exists(2, $data["requisito"]),
            "dil_form_inscrip" => array_key_exists(3, $data["requisito"]),
            "aprob_entrevista" => array_key_exists(4, $data["requisito"]),
            "eps" => array_key_exists(5, $data["requisito"]),
            "acta_matricula" => array_key_exists(6, $data["requisito"]),
            "contrato_matricula" => array_key_exists(7, $data["requisito"]),
            "reg_not_ano_ante" => array_key_exists(8, $data["requisito"]),
            "renov_con_acta" => array_key_exists(9, $data["requisito"]),
            "pago_matricula" => array_key_exists(10, $data["requisito"]),
            "reg_civil" => array_key_exists(11, $data["requisito"]),
            "fotos" => array_key_exists(12, $data["requisito"]),
            "carnet_vacuna" => array_key_exists(13, $data["requisito"]),
        ]);

        $idStudent = Estudiante::create([
            "nombre_est" => $data["nombre_est"],
            "apellido_est" => $data["apellido_est"],
            "doc_id" => $data["doc_id"],
            "num_id" => $data["num_id"],
            "lugar_nac" => $data["lugar_nac"],
            "fecha_nac" => $data["fecha_nac"],
            "edad" => $data["edad"],
            "religion" => $data["religion"],
            "genero" => $data["genero"],
            "tipo_est" => $data["tipo_est"],
            "nombre_tutor" => $data["madre_nombre"],

        ]);

        $enrollment = Matricula::create([
            "tipo_matricula" => $data["tipo_matricula"],
            'id_grado' => $idGrado,
            'id_requisito' => $idRequisitos,
            'id_estudiante' => $idStudent,
            'id_acudiente' => $idGrado,
        ]);


        /*
        array:25 [▼
"_token" => "ixFOzkYk7aiQlnBmQ21mB0ZHDKjbCUAQioR6trQd"
  "tipo_matricula" => "Seleccione..."
  "id_grado" => "Seleccione..."
  "requisito" => array:2 [▼
    2 => "simat"
    9 => "reg_not_ano_ante"
  ]
  "parentesco" => "Seleccione..."
  "madre_nombre" => null
  "madre_apellido" => null
  "madre_cedula" => null
  "madre_telefono" => null
  "padre_nombre" => null
  "padre_apellido" => null
  "padre_cedula" => null
  "padre_telefono" => null
  "acudiente_nombre" => null
  "acudiente_apellido" => null
  "acudiente_cedula" => null
  "acudiente_telefono" => null
  "nombre_est" => null
  "apellido_est" => null
  "genero" => "Seleccione..."
  "doc_id" => "Seleccione..."
  "num_id" => null
  "lugar_nac" => null
  "fecha_nac" => "06/03/2019"
  "edad" => null
  "religion" => null]
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
