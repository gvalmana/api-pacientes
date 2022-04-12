<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;
class PacienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'nombre completo' => $this->nombres.' '.$this->apellidos ,
            'edad' => $this->edad,
            'dni' => $this->dni,
            'sexo' => $this->sexo=='M'?'Masculino':'Femenino',
            'tipo_sangre' => $this->tipo_sangre,
            'telefono' => $this->telefono,
            'correo' => $this->correo,
            'direccion' => $this->direccion,
            'created_at' => $this->created_at->format('d-m-Y'),
            'updated_at' => $this->updated_at->format('d-m-Y'),
            '_links' => [
                '_self' => [
                    'href' => route('pacientes.show',['paciente'=>$this->id])
                ],
                'deleteById'=>[
                    'href' => route('pacientes.show',['paciente'=>$this->id])
                ],
                'updateById'=>[
                    'href' => route('pacientes.show',['paciente'=>$this->id])
                ]                
            ]
        ];
    }

    public function with($request)
    {
        return [
            'res' => true
        ];
    }
}
