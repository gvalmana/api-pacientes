<?php

namespace App\Http\Requests\api;

use Illuminate\Foundation\Http\FormRequest;

class GuardarPacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombres' => 'required',
            'apellidos' => 'required',
            'edad' => 'required',
            'dni' => 'required|unique:pacientes,dni',
            'tipo_sangre' => 'required',
            'telefono' => 'required',
            'correo'=> 'required',
            'direccion'=> 'required',
        ];
    }
}