<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paciente extends \CrudApiRestfull\Models\RestModel
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
