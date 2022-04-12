<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
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
