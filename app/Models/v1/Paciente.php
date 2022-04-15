<?php

namespace App\Models\v1;

use CrudApiRestfull\Models\RestModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paciente extends RestModel
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'edad',
        'dni',
        'tipo_sangre',
        'telefono',
        'correo',
        'direccion',
        'sexo'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
