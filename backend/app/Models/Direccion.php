<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    //
     protected $table = 'direccion';

    protected $primaryKey = 'id_direccion';

    protected $fillable = [
        'nom_direccion',
    ];
}
