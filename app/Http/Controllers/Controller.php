<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
