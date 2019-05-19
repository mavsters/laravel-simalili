<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    protected $typeUser = "";

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
        $typeUser = $this->typeUser['name'];
        $title = "Bienvenido - " . $typeUser;
        $nameView = "login." . $this->typeUser['typeUser'];


        return
            view($nameView,
                compact('title', 'typeUser'));
    }

    function dashboard()
    {
        $title = 'User';
        self::getDataBasic();
        $typeUser = $this->typeUser['name'];
        return view($this->typeUser['typeUser'] . '.user',
            compact('users', 'title', 'typeUser'));

    }

    public function login(){
        $title = 'Listado de usuarios';

        return view('login.index',compact('title'));
    }

    public function executive(){
        $title = 'Listado de usuarios';

        return view('login.executive',compact('title'));
    }

    public function show($id){
        return "Mostrando detalles del usuario: {$id}";
    }


    protected function getDataBasic()
    {
        // Globals
        // Usuario - Tipo de Usuario

        $typeUserID = User::where(
            'email', 'like', '%' . (Auth::user()->email) . '%'
        )->first()->tipousuario;

        $typeUser = $typeUserID->tipo_usuario;

        $type = '';
        switch ($typeUser) {
            case 'Directivo':
                $type = 'executive';
                break;
            case 'Secretaría':
                $type = 'secretary';
                break;
            default:
                $type = 'home';
                break;
        }

        $this->typeUser = [
            "typeUser" => $type,
            "name" => $typeUser
        ];


    }

}
