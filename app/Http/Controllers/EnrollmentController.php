<?php

namespace App\Http\Controllers;

use App\Models\Matricula;

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
        return
            view('enrollments.create', compact('crud'));
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

    public function edit(Matricula $enrollment)
    {
        $crud = true;
        return view('enrollments.edit', ['enrollment' => $enrollment], compact('crud'));
    }

}
