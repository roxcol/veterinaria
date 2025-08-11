<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    //
    protected $table = 'propietario';

    protected $primaryKey = 'id_propietario';

    protected $fillable = [
        'nombre',
        'apellido_p',
        'apellido_m',
        'id_direccion',
        'ci',
        'telefono',
    ];
}
