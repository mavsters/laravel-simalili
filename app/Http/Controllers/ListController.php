<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Estudiante;

class ListController extends Controller
{
    //
    public function academic()
    {
        return
            view('list.academic', compact(''));
    }

    public function docent()
    {
        $docents = Docente::all();
        return
            view('list.docent', compact('docents'));
    }

    public function general()
    {
        $estudiantes = Estudiante::all();
        return
            view('list.general', compact('estudiantes'));
    }

    public function grades()
    {
        $estudiantes = Estudiante::all();
        return
            view('list.grades', compact('estudiantes'));
    }
}
