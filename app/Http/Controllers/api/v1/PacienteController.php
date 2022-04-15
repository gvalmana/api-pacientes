<?php

namespace App\Http\Controllers\api\v1;

use App\Models\v1\Paciente;
use App\Services\v1\PacienteService;
use CrudApiRestfull\Controllers\RestController;

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
