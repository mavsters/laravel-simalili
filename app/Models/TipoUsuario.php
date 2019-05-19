<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    //
    protected $table = 'tipousuario';

    protected $fillable = [
        'id',
        'tipo_usuario'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }


}
