<?php

namespace App\Services\api;

use App\Models\Paciente;
use App\Services\Services;

class PacienteService extends Services
{
    public function __construct()
    {
        parent::__construct(Paciente::class);
    }    
}
