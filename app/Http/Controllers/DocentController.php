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
            'edad' => 'required',
            'religion' => 'required',
            'titulo_prof' => 'required',
            'tipo_documento' => 'required',
            'number_id' => 'required',
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'lugar_nac.required' => 'El Lugar de Nacimiento es Obligatorio',
            'edad.required' => 'La edad es Obligatorio',
            'religion.required' => 'La Religión es Obligatoria',
            'titulo_prof.required' => 'El titulo de profesión es Obligatorio',
            'tipo_documento.required' => 'El tipo de documento es Obligatorio',
            'number_id.required' => 'El número de Identificación es Obligatorio',
        ]);
        Docente::create([
            'nombre_completo' => $data['name'],
            'lugar_nac' => $data['lugar_nac'],
            'edad' => $data['edad'],
            'religion' => $data['religion'],
            'titulo_prof' => $data['titulo_prof'],
            'tipo_documento' => $data['tipo_documento'],
            'number_id' => $data['number_id']
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
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'lugar_nac.required' => 'El Lugar de Nacimiento es Obligatorio',
            'edad.required' => 'La edad es Obligatorio',
            'religion.required' => 'La Religión es Obligatoria',
            'titulo_prof.required' => 'El titulo de profesión es Obligatorio',
            'tipo_documento.required' => 'El tipo de documento es Obligatorio',
            'number_id.required' => 'El número de Identificación es Obligatorio',
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
