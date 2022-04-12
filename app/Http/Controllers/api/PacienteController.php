<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RestController;
use App\Http\Requests\api\ActualizarPacienteRequest;
use App\Http\Requests\api\GuardarPacienteRequest;
use App\Http\Resources\PacienteResource;
use App\Models\Paciente;
use App\Services\api\PacienteService;
use Illuminate\Http\Request;

class PacienteController extends RestController
{
    /**
     *  PacienteController constructor.
     */
    public function __construct()
    {
        $classnamespace= Paciente::class;
        $classnamespaceservice=PacienteService::class;
        $resource = PacienteResource::class;
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
        $this->resource = $resource;
    }

}
