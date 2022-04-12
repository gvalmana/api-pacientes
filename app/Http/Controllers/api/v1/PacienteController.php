<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\RestController;
use App\Http\Resources\v1\PacienteResource;
use App\Models\v1\Paciente;
use App\Services\v1\PacienteService;

class PacienteController extends RestController
{
    /**
     *  PacienteController constructor.
     */
    public function __construct()
    {
        $classnamespace= Paciente::class;
        $classnamespaceservice=PacienteService::class;
        $this->modelClass=new $classnamespace;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }

}
