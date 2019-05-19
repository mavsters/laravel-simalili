<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        // Usuario - Tipo de Usuario
        $typeUserID = DB::table('users')->select('id_tipousuario')->where(
            'email', 'like', '%' . (Auth::user()->email) . '%'
        )->first()->id_tipousuario;

        // Tipo de Usuario
        $typeUser = DB::table('tipousuario')->select('tipo_usuario')->where(
            'id', '=', $typeUserID
        )->first()->tipo_usuario;

        // Values View
        $title = "Bienvenido - $typeUser";
        $nameView = 'login.';
        switch ($typeUser) {
            case 'Directivo':
                $nameView .= 'executive';
                break;
            case 'Secretaría':
                $nameView .= 'secretary';
                break;
            default:
                $nameView = 'home';
                break;
        }

        if(request()->has('empty')){
            $users = [];
        }else {

            $users = [
                "Andres",
                "juana",
                "isabel",
                "<script>alert('hola');</script>",
            ];
        }

        return
            view($nameView,
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


}
