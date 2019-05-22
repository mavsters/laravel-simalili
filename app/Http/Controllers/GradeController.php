<?php

namespace App\Http\Controllers;

use App\Models\Grado;

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
            'nombre' => 'required',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio'
        ]);
        Grado::create([
            'nombre' => $data['nombre'],
        ]);
        return redirect()->back();
    }

    public function edit(Grado $grade)
    {
        $crud = true;
        return view('grades.edit', ['grade' => $grade], compact('crud'));
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
            'nombre' => 'required',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio'
        ]);
        $grade->update($data);

        return redirect()->route('grades.show', ['grades' => $grade]);
    }


    function destroy(Grado $grade)
    {
        $grade->delete();
        return redirect()->back();
    }
}
