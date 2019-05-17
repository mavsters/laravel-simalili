<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    //
    public function __invoke($name,$nickname = null)
    {
        $name = ucfirst($name);
        if($nickname!=null){
            return "$name Tu usario: $nickname";
        }else{
            return "No tiene usuario";
        }
    }
}
