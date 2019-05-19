<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
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
        $nameView = 'users.index';
        return
            view($nameView,
                compact('title', 'users', 'typeUser'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => 'required',
        ], [
            'name.required' => 'El campo nombre es obligatorio'
        ]);
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => '',
        ]);

        if ($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('users.show', ['user' => $user]);
    }

    function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }

    protected function getDataBasic()
    {
        // Globals
        // Usuario - Tipo de Usuario

        $typeUserID = User::where(
            'email', 'like', '%' . (Auth::user()->email) . '%'
        )->first()->tipousuario;

        $typeUser = $typeUserID->tipo_usuario;

        $name = '';
        switch ($typeUser) {
            case 'Directivo':
                $name = 'executive';
                break;
            case 'Secretaría':
                $name = 'secretary';
                break;
            default:
                $name = 'home';
                break;
        }

        return [
            "name" => $name,
            "typeUser" => $typeUser
        ];


    }

}
