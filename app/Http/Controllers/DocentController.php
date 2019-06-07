<?php

namespace App\Http\Controllers;

use App\Models\Docente;

class DocentController extends Controller
{
    //

    public function docents()
    {
        $docents = Docente::all();
        $typeUser = self::getDataBasic()['typeUser'];
        $nameView = self::getDataBasic()['name'] . ".docent";
        return
            view($nameView,
                compact('title', 'docents', 'typeUser'));

    }

    public function create()
    {
        $crud = true;
        $docents = Docente::all();
        return view('docents.create', compact('crud', 'docents'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'lugar_nac' => 'required',
            'fecha_nac' => 'required',
            'edad' => 'required | numeric|min:1 |max:100',
            'religion' => 'required',
            'titulo_prof' => 'required',
            'tipo_documento' => 'required|not_in:0',
            'number_id' => 'required | numeric',
            'genero' => 'required'
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'lugar_nac.required' => 'El Lugar de Nacimiento es Obligatorio',
            'fecha_nac.required' => 'La fecha de Nacimiento es Obligatorio',
            'edad.required' => 'La edad es Obligatorio',
            'edad.numeric' => 'La edad debe ser un número',
            'edad.min' => 'La edad minimo es 1',
            'edad.max' => 'La edad maxima es 100',
            'religion.required' => 'La Religión es Obligatoria',
            'titulo_prof.required' => 'El titulo de profesión es Obligatorio',
            'tipo_documento.required' => 'El tipo de documento es Obligatorio',
            'tipo_documento.not_in' => 'Debe elegir un tipo de documento',
            'number_id.required' => 'El número de Identificación es Obligatorio',
            'number_id.numeric' => 'El numero de ID debe ser un número',
            'genero.required' => 'Debe seleccionar un genero'
        ]);
        Docente::create([
            'nombre_completo' => $data['name'],
            'lugar_nac' => $data['lugar_nac'],
            'fecha_nac' => $data['fecha_nac'],
            'edad' => $data['edad'],
            'religion' => $data['religion'],
            'titulo_prof' => $data['titulo_prof'],
            'tipo_documento' => $data['tipo_documento'],
            'number_id' => $data['number_id'],
            'genero' => $data['genero'][0]
        ]);

        return redirect()->back();
    }

    public function edit(Docente $docent)
    {
        $crud = true;
        return view('docents.edit', ['docent' => $docent], compact('crud'));
    }

    public function show(Docente $docent)
    {
        $crud = true;
        return view('docents.show', compact('crud', 'docent'));
    }

    public function search()
    {
        $crud = true;
        $docents = Docente::all();
        return view('docents.search', compact('crud', 'docents'));
    }

    public function update(Docente $docent)
    {
        // Docent
        $data = request()->validate([
            'name' => 'required',
            'lugar_nac' => 'required',
            'edad' => 'required',
            'religion' => 'required',
            'titulo_prof' => 'required',
            'tipo_documento' => 'required',
            'number_id' => 'required',
            'genero' => 'required'
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'lugar_nac.required' => 'El Lugar de Nacimiento es Obligatorio',
            'edad.required' => 'La edad es Obligatorio',
            'religion.required' => 'La Religión es Obligatoria',
            'titulo_prof.required' => 'El titulo de profesión es Obligatorio',
            'tipo_documento.required' => 'El tipo de documento es Obligatorio',
            'number_id.required' => 'El número de Identificación es Obligatorio',
            'genero' => 'Debe seleccionar un genero'
        ]);
        $docent->update($data);

        return redirect()->route('docents.show', ['docent' => $docent]);
    }

    function destroy(Docente $docent)
    {
        $docent->delete();
        return redirect()->back();
    }

}
