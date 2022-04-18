<?php

namespace App\Http\Controllers\api\v1;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PacienteController extends \CrudApiRestfull\Controllers\RestController
{
    /**
     *  PacienteController constructor.
     */
    public function __construct()
    {
        $classnamespace= \App\Models\v1\Paciente::class;
        $classnamespaceservice= \App\Services\v1\PacienteService::class;
        $this->modelClass=new $classnamespace;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }

    public function report(Request $request)
    {
        $params = $this->process_request($request);
        $result = $this->service->list_all($params);
        view()->share('report',['result'=>$result]);
        $pdf = Pdf::loadView('report',['result'=>$result]);
        return $pdf->download('archivo-pdf.pdf');
    }
}
