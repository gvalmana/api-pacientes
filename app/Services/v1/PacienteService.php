<?php

namespace App\Services\v1;

use App\Models\v1\Paciente;
use App\Services\Services;

class PacienteService extends Services
{
    public function __construct()
    {
        parent::__construct(Paciente::class);
    }    
}
