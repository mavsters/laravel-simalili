<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;

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
        // Flag
        //$this->withoutExceptionHandling();

        // $this->middleware('auth');
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

        return
            view($nameView,
                compact('title', 'users', 'typeUser'));
    }

    function dashboard()
    {
        $title = 'User';
        self::getDataBasic();
        $typeUser = self::getDataBasic()['typeUser'];


        return view(self::getDataBasic()['name'] . '.user',
            compact('users', 'title', 'typeUser'));

    }

    function list()
    {
        $title = 'Listado de usuarios';
        $users = User::all();

        return
            view('users',
                compact('title', 'users'));
    }

    public function login(){
        $title = 'Listado de usuarios';

        return view('login.index',compact('title'));
    }

    public function executive(){
        $title = 'Listado de usuarios';

        return view('login.executive',compact('title'));
    }

    public function show(User $user)
    {
        $title = 'Listado de usuarios';
        return view('show', compact('title', 'user'));
    }


    public function create()
    {
        return view('user.create');
    }

    public function store()
    {
        return "procesando";
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
