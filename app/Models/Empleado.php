<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public $timestamps = false;

    protected $table = 'empleados';

    protected $fillable = [
        'nombre',
        'telefono',
        'correo',
    ];
}
