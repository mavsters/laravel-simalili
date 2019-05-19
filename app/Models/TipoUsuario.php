<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    //
    protected $table = 'tipousuario';


    public function users()
    {
        return $this->hasMany(User::class);
    }

}
