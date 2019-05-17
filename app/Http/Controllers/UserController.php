<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{



    //pubf
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        // Flag
        //$this->withoutExceptionHandling();

    }

    public function index()
    {
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
        $title = 'Listado de usuarios';
        /*return view('users',[
            'users'=>$users,
            'title'=>'Listado de usuarios'
        ]);//"Usuarios";*/

        /*return view('users')
            ->with('users',$users)
            ->with('title','Listado de usuarios');
        */

        // var_dump(compact....); die();
        // dd(compact('users','title'));

        return view('users',
        compact('users','title'));
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
