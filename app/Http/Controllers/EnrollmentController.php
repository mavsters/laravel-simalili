<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\Matricula;
use App\Models\Persona;
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

        $enrollment = Matricula::all();
        return
            view('enrollments.create', compact('crud', 'enrollment', 'parentesco'));
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
            "madre_cedula" => "required | numeric",
            "madre_telefono" => "required",
            "padre_nombre" => "required",
            "padre_apellido" => "required",
            "padre_cedula" => "required | numeric",
            "padre_telefono" => "required",
            "acudiente_nombre" => "required",
            "acudiente_apellido" => "required",
            "acudiente_cedula" => "required | numeric",
            "acudiente_telefono" => "required",
            "tipo_est" => "required",
            "nombre_est" => "required",
            "apellido_est" => "required",
            "genero" => "required",
            "doc_id" => "required",
            "num_id" => "required",
            "lugar_nac" => "required",
            "fecha_nac" => "required",
            "edad" => "required",
            "religion" => "required"
        ],
            ["tipo_matricula.required" => "El tipo de matrícula es requerido",
                "id_grado.required" => "El grado es requerido",
                "requisito.required" => "Los requisitos son requeridos",
                "parentesco.required" => "El parentesco es requerido",
                "madre_nombre.required" => "El nombre de la madre es requerido",
                "madre_apellido.required" => "El apellido de la madre es requerido",
                "madre_cedula.required" => "La cédula de la madre es requerido",
                "madre_telefono.required" => "El telefono de la madre es requerido",
                "padre_nombre.required" => "El nombre del padre es requerido",
                "padre_apellido.required" => "El apellido del padre es requerido",
                "padre_cedula.required" => "La cédula del padre es requerida",
                "padre_telefono.required" => "El telefono del padre es requerido",
                "acudiente_nombre.required" => "El nombre del acudiente es requerido",
                "acudiente_apellido.required" => "El apellido del acudiente es requerido",
                "acudiente_cedula.required" => "La dédula del acudiente es requerida",
                "acudiente_telefono.required" => "El telefono del acudiente es requerido",
                "tipo_est.required" => "El tipo de estudiante es requerido",
                "nombre_est.required" => "El nombre del estudante es requerido",
                "apellido_est.required" => "El apellido del estudiante es requerido",
                "genero.required" => "El género es requerido",
                "doc_id.required" => "El tipo de documento de identidad es requerido",
                "num_id.required" => "El número de identidad es requerido",
                "lugar_nac.required" => "El lugar de nacimiento es requerido",
                "fecha_nac.required" => "La fecha de nacimiento es requerida",
                "edad.required" => "La edad es requerida",
                "religion.required" => "La religión es requerida"
            ]);


        $idGrado = Grado::where(
            'nombre', 'like', '%' . ($data['id_grado']) . '%'
        )->first()->id;
        $idRequisitos = Requisito::create([
            "tipo_requisito" => ($data["tipo_matricula"]),
            "pago_inscripcion" => (int)isset($data["requisito"][0]),
            "paz_y_salvo" => (int)isset($data["requisito"][1]),
            "simat" => (int)isset($data["requisito"][2]),
            "dil_form_inscrip" => (int)isset($data["requisito"][3]),
            "aprob_entrevista" => (int)isset($data["requisito"][4]),
            "eps" => (int)isset($data["requisito"][5]),
            "acta_matricula" => (int)isset($data["requisito"][6]),
            "contrato_matricula" => (int)isset($data["requisito"][7]),
            "reg_not_ano_ante" => (int)isset($data["requisito"][8]),
            "renov_con_acta" => (int)isset($data["requisito"][9]),
            "pago_matricula" => (int)isset($data["requisito"][10]),
            "reg_civil" => (int)isset($data["requisito"][11]),
            "fotos" => (int)isset($data["requisito"][12]),
            "carnet_vacuna" => (int)isset($data["requisito"][13]),
        ]);

        $phpdate = strtotime($data["fecha_nac"]);
        $mysqldate = date('Y-m-d H:i:s', $phpdate);

        $idStudent = Estudiante::create([
            "nombre_est" => $data["nombre_est"],
            "apellido_est" => $data["apellido_est"],
            "doc_id" => $data["doc_id"],
            "num_id" => $data["num_id"],
            "lugar_nac" => $data["lugar_nac"],
            "fecha_nac" => $mysqldate,
            "edad" => $data["edad"],
            "religion" => $data["religion"],
            "genero" => $data["genero"][0],
            "tipo_est" => $data["tipo_est"],
            "nombre_tutor" => $data["madre_nombre"],

        ]);

        $personaMadre = Persona::create([
            "nombre" => $data["madre_nombre"],
            "apellido" => $data["madre_apellido"],
            "cedula" => $data["madre_cedula"],
            "telefono" => $data["madre_telefono"],
            "parentesco" => "madre"
        ]);
        $personaPadre = Persona::create(
            [
                "nombre" => $data["padre_nombre"],
                "apellido" => $data["padre_apellido"],
                "cedula" => $data["padre_cedula"],
                "telefono" => $data["padre_telefono"],
                "parentesco" => "padre"
            ]
        );
        $persona = Persona::create(
            [
                "nombre" => $data["acudiente_nombre"],
                "apellido" => $data["acudiente_apellido"],
                "cedula" => $data["acudiente_cedula"],
                "telefono" => $data["acudiente_telefono"],
                "parentesco" => $data["parentesco"]
            ]
        );

        $enrollment = Matricula::create([
            "tipo_matricula" => $data["tipo_matricula"],
            'id_grado' => $idGrado,
            'id_requisito' => $idRequisitos->id,
            'id_estudiante' => $idStudent->id,
            'id_acudiente' => $persona->id
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


        return redirect()->back();
    }

    public function edit(Matricula $enrollment)
    {
        $crud = true;
        return view('enrollments.edit', ['enrollment' => $enrollment], compact('crud'));
    }

    public function show(Matricula $enrollment)
    {
        $crud = true;
        return view('enrollments.show', compact('crud', 'enrollment'));
    }

    public function search()
    {
        $crud = true;
        $enrollments = Matricula::all();
        return view('enrollments.search', compact('crud', 'enrollments'));
    }

    public function update(Matricula $enrollment)
    {
        // User

        return redirect()->route('enrollments.show', ['enrollment' => $enrollment]);
    }


    function destroy(Matricula $enrollment)
    {
        $enrollment->delete();
        return redirect()->back();
    }

}
