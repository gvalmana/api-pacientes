<?php

namespace App\Services\v1;

use App\Models\v1\Paciente;

class PacienteService extends \CrudApiRestfull\Services\Services
{
    public function __construct()
    {
        parent::__construct(Paciente::class);
    }    
}
