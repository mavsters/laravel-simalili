<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;

class StudentController extends Controller
{
    //
    public function students()
    {
        $student = Estudiante::all();
        $typeUser = self::getDataBasic()['typeUser'];
        $nameView = self::getDataBasic()['name'] . ".student";

        return
            view($nameView,
                compact('title', 'student', 'typeUser'));

    }


    function create()
    {
        $crud = true;
        $students = Estudiante::all();
        return
            view('students.create', compact('crud', 'students'));
    }

    public function store()
    {
        $data = request()->validate([
            'nombre' => 'required',
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

            return redirect()->back();

    }

    public function edit(Estudiante $student)
    {
        $crud = true;
        return view('students.edit', ['student' => $student], compact('crud'));
    }

    public function show(Estudiante $student)
    {
        $crud = true;
        return view('students.show', compact('crud', 'student'));
    }

    public function search()
    {
        $crud = true;
        $students = Estudiante::all();
        return view('students.search', compact('crud', 'students'));
    }

    public function update(Estudiante $student)
    {
        // User
        $data = request()->validate([
            'nombre' => 'required',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio'
        ]);
        $student->update($data);

        return redirect()->route('students.show', ['students' => $student]);
    }


    function destroy(Estudiante $student)
    {
        $student->delete();
        return redirect()->back();
    }
}

