<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\AsignaturaCurso;
use App\Models\Curso;
use App\Models\Docente;
use App\Models\Grado;

class SubjectController extends Controller
{
    //
    public function subjects()
    {
        $subjects = Asignatura::all();
        $typeUser = self::getDataBasic()['typeUser'];
        $nameView = self::getDataBasic()['name'] . ".subject";
        return
            view($nameView,
                compact('title', 'subjects', 'typeUser'));

    }

    function create()
    {
        $crud = true;
        $subjects = Asignatura::all();
        $docent = Docente::all();
        $grade = Grado::all();


        return
            view('subjects.create', compact('crud', 'subjects', 'docent', 'grade'));
    }


    public function store()
    {
        $data = request()->validate([
            'grado_name' => 'required',
            'docente_name' => 'required',
            "nombre_asignatura" => "required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w]))(?!\S*\s\S*\s).+$/|unique:asignatura,nombre_asignatura",
        ], [
            'grado_name.required' => 'El campo nombre es obligatorio',
            'docente_name.required' => 'El campo Docente es obligatorio',
            "nombre_asignatura.required" => "El campo nombre asignatura es obligatorio",
            "nombre_asignatura.unique" => "El nombre de la asignatura ya existe.",
            "nombre_asignatura.regex" => "Solo se aceptan letras en nombre asignatura"
        ]);


        $idGrado = Grado::where(
            'nombre', 'like', '%' . ($data['grado_name']) . '%'
        )->first()->id;




        $idDocent = Docente::where(
            'nombre_completo', 'like', '%' . ($data['docente_name']) . '%'
        )->first()->id;


        $subject = Asignatura::create([
            'nombre_asignatura' => $data['nombre_asignatura'],
            'id_docente' => $idDocent,
            'estado' => 1
        ]);


        $curso = Curso::where(['id_grado' => $idGrado])->get();
        foreach ($curso as $value) {
            $asignaturaCurso = AsignaturaCurso::create([
                'id_asignatura' => $subject->id,
                'id_curso' => $value->id
            ]);

        }
        return redirect()->back();
    }

    public function edit(Asignatura $subject)
    {
        $crud = true;
        $docents = Docente::all();
        $grades = Grado::all();


        $asignaturaCurso = AsignaturaCurso::where([
            'id_asignatura' => $subject->id,
        ])->first();

        $idCourse = ($asignaturaCurso->id_curso);


        $course = Curso::where([
            'id' => $idCourse,
        ])->first();

        $idGrade = ($course->id_grado);

        $grade = Grado::where([
            'id' => $idGrade,
        ])->first();


        $idDocent = $subject->id_docente;

        $docent = Docente::where([
            'id' => $idDocent,
        ])->first();
        // Grado*/

        return view('subjects.edit', ['subject' => $subject],
            compact('crud', 'docents', 'grades', 'grade', 'docent', 'course'));
    }

    public function show(Asignatura $subject)
    {
        $crud = true;


        $asignaturaCurso = AsignaturaCurso::where([
            'id_asignatura' => $subject->id,
        ])->first();

        $idCourse = ($asignaturaCurso->id_curso);

        $course = Curso::where([
            'id' => $idCourse,
        ])->first();

        $idGrade = ($course->id_grado);

        $grade = Grado::where([
            'id' => $idGrade,
        ])->first();


        $idDocent = $subject->id_docente;

        $docent = Docente::where([
            'id' => $idDocent,
        ])->first();

        return view('subjects.show', compact('crud', 'subject', 'docents', 'grades', 'grade', 'docent', 'course'));
    }

    public function search()
    {
        $crud = true;
        $subjects = Asignatura::all();
        return view('subjects.search', compact('crud', 'subjects'));
    }


    public function update(Asignatura $subject)
    {
        // User
        $data = request()->validate([

            'docente_name' => 'required',
            "nombre_asignatura" => "required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w]))(?!\S*\s\S*\s).+$/",
        ], [

            'docente_name.required' => 'El campo Docente es obligatorio',
            "nombre_asignatura.required" => "El campo nombre asignatura es obligatorio",
            "nombre_asignatura.regex" => "Solo se aceptan letras en nombre asignatura"
        ]);


        $subject->update([
            'nombre_asignatura' => $data['nombre_asignatura'],
            'id_docente' => $subject->id_docente,
            'estado' => 1
        ]);

        /** TODO: Update Subject */

        return redirect()->route('subjects.show', ['subject' => $subject]);
    }


    function destroy(Asignatura $subject)
    {
        $subject->delete();
        return redirect()->back();
    }

}
