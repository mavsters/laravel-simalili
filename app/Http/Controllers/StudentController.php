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
            'countCourses' => 'required|max:4'
        ], [
            'nombre.required' => 'El campo nombre es obligatorio',
            'countCourses.required' => 'Digite un número menor de 4'
        ]);
        if (is_numeric($data['countCourses'])) {
            $student = Estudiante::create([
                'nombre' => $data['nombre'],
            ]);

            $letter = ['A', 'B', 'C', 'D'];
            for ($i = 0; $i < $data['countCourses']; $i++) {
                $curso = Curso::create([
                    'nombre_curso' => "$letter[$i]",
                    'id_grado' => $student->id
                ]);
            }
            return redirect()->back();
        }

    }

    public function edit(Estudiante $student)
    {
        $crud = true;
        return view('students.edit', ['student' => $student], compact('crud'));
    }

    public function show(Estudiante $student)
    {
        $crud = true;
        return view('students.show', compact('crud', 'grade'));
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

