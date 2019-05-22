<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Validation\Rule;


class UserController extends Controller
{

    //pubf
    /**
     * UserController constructor.
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        self::getDataBasic();
        // Values View
        $typeUser = self::getDataBasic()['typeUser'];
        $title = "Bienvenido - " . $typeUser;
        $nameView = "login." . self::getDataBasic()['name'];

        $users = User::all();
        //  $nameView = 'users.index';
        return
            view($nameView,
                compact('title', 'users', 'typeUser'));
    }

    public function users()
    {
        $title = "Usuarios";
        $users = User::all();
        $typeUser = self::getDataBasic()['typeUser'];
        $nameView = self::getDataBasic()['name'] . ".user";
        return
            view($nameView,
                compact('title', 'users', 'typeUser'));

    }

    public function create()
    {
        $crud = true;
        $users = User::all();
        return view('users.create', compact('crud', 'users'));
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


        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => 'required',
            'tipo_usiaro' => 'required',
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'tipo_usiaro.required' => 'Tipo de usuario Requerido'
        ]);


        $tipo_usuario = 0;
        switch ($data['tipo_usiaro']) {
            case 'Directivo':
                $tipo_usuario = 1;
                break;
            case 'Secretaría':
                $tipo_usuario = 2;
                break;
            case 'Normal':
                $tipo_usuario = 3;
                break;
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'id_tipousuario' => $tipo_usuario
        ]);

        return redirect()->back();
    }

    public function edit(User $user)
    {
        $crud = true;
        $docent = Docente::where(
            'nombre_completo', 'like', '%' . ($user->name) . '%'
        )->first();
        return view('users.edit', ['user' => $user, 'docent' => $docent], compact('crud'));
    }

    public function show(User $user)
    {
        $crud = true;
        $docent = Docente::where(
            'nombre_completo', 'like', '%' . ($user->name) . '%'
        )->first();

        $users = User::all();
        return view('users.show', compact('crud', 'users', 'user', 'docent'));
    }

    public function search()
    {
        $crud = true;
        $users = User::all();
        return view('users.search', compact('crud', 'users'));
    }

    public function update(User $user)
    {
        $docent = Docente::where(
            'nombre_completo', 'like', '%' . ($user->name) . '%'
        )->first();

        if (isset($docent)) {
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
        }
        // User
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => '',
            'tipo_usiaro' => 'required',
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'tipo_usiaro.required' => 'Tipo de usuario Requerido'
        ]);

        $tipo_usuario = 0;

        switch ($data['tipo_usiaro']) {
            case 'Directivo':
                $tipo_usuario = 1;
                break;
            case 'Secretaría':
                $tipo_usuario = 2;
                break;
            case 'Normal':
                $tipo_usuario = 3;
                break;
        }

        if ($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $data['id_tipousuario'] = $tipo_usuario;
        $user['id_tipousuario'] = $tipo_usuario;

        $user->update($data);

        return redirect()->route('users.show', ['user' => $user]);
    }

    function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }


}
