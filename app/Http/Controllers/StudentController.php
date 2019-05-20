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

    public function show(Estudiante $estudiante)
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

}
