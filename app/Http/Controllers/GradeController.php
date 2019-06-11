<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Grado;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    //
    public function grades()
    {
        $grades = Grado::all();
        $typeUser = self::getDataBasic()['typeUser'];
        $nameView = self::getDataBasic()['name'] . ".grades";
        return
            view($nameView,
                compact('title', 'grades', 'typeUser'));

    }

    function create()
    {
        $crud = true;
        $grades = Grado::all();
        return
            view('grades.create', compact('crud', 'grades'));
    }

    public function store()
    {
        $data = request()->validate([
            'nombre' => 'required|regex:/^[a-zA-Z]+$/u|max:255|unique:grado,nombre',
            'countCourses' => 'required|numeric|min:1|max:4'
        ], [
            'nombre.required' => 'El campo nombre es obligatorio',
            'nombre.regex' => 'Solo se pueden letras',
            'nombre.unique' => 'El nombre ya exite',
            'countCourses.required' => 'Digite un número menor de 4',
            'countCourses.numeric' => 'El número de grados bede ser un número',
            'countCourses.min' => 'El número de grados bede ser un número mayor de 1 y menor que 4',
            'countCourses.max' => 'El número de grados bede ser un número mayor de 1 y menor que 4'
        ]);
        if (is_numeric($data['countCourses'])) {
            $grade = Grado::create([
                'nombre' => $data['nombre'],
            ]);


            for ($i = 1; $i <= $data['countCourses']; $i++) {
                $curso = Curso::create([
                    'nombre_curso' => $i,
                    'id_grado' => $grade->id
                ]);
            }
            return redirect()->back();
        }

    }

    public function edit(Grado $grade)
    {
        $crud = true;
        $course = Curso::where(['id_grado' => $grade->id])->get()->last();

        return view('grades.edit', ['grade' => $grade], compact('crud', "course"));
    }

    public function show(Grado $grade)
    {
        $crud = true;
        return view('grades.show', compact('crud', 'grade'));
    }

    public function search()
    {
        $crud = true;
        $grades = Grado::all();
        return view('grades.search', compact('crud', 'grades'));
    }

    public function update(Grado $grade)
    {
        // User
        $data = request()->validate([
            'nombre' => 'required|regex:/^[a-zA-Z]+$/u|max:255|unique:grado,nombre',
            'countCourses' => 'required|numeric|min:1|max:4'
        ], [
            'nombre.required' => 'El campo nombre es obligatorio',
            'nombre.regex' => 'Solo se pueden letras',
            'nombre.unique' => 'El nombre ya exite',
            'countCourses.required' => 'Digite un número menor de 4',
            'countCourses.numeric' => 'El número de grados bede ser un número',
            'countCourses.min' => 'El número de grados bede ser un número mayor de 1 y menor que 4',
            'countCourses.max' => 'El número de grados bede ser un número mayor de 1 y menor que 4'
        ]);
        $grade->update($data);

        return redirect()->route('grades.show', ['grades' => $grade]);
    }


    function destroy(Grado $grade)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        $grade->delete();

        $course = Curso::where(['id_grado' => $grade->id])->first();
        $course->delete();

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        return redirect()->back();
    }
}
