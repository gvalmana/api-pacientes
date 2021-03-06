<?php

namespace App\Models\v1;

use CrudApiRestfull\Models\RestModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Atributos del modelo
 * @property integer $id
 * @property string $nombres
 * @property string $apellidos
 * @property integer $edad
 * @property string $dni
 * @property string $tipo_sangre
 * @property string $telefono
 * @property string $correo
 * @property string $correo
 * @property string $sexo
 */
class Paciente extends RestModel
{
    use HasFactory;

    /**
     * La tabla asociada al modelo
     * @var string
     */
    protected $table = 'pacientes';
    /**
     * La base de datos asociada al modelo
     * @var string|null
     */
    protected $connection = 'mysql';
    /**
     * La primary key asociada de tabla-modelo 
     */
    protected $primaryKey = 'id';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */    
    public $timestamps = true;
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';
    /**
     * Relaciones del modelo
     * @var array
     */
    const RELATIONS = [];
    /**
     * The number of models to return for pagination.
     *
     * @var int
     */    
    protected $perPage = 15;

    /**
     * Lista de modelos que heredan del modelo
     * @var array
     */
    protected $appends = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */    
    protected $fillable = [
        'id',
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

    protected function rules($scenario='create')
    {
        $rules = [
            'create' => [
                'id' => 'required|unique:pacientes,id',
                'nombres' => 'required',
                'apellidos' => 'required',
                'edad' => 'required',
                'dni' => 'required|unique:pacientes,dni',
                'tipo_sangre' => 'required',
                'telefono' => 'required',
                'correo'=> 'required|unique:pacientes,correo',
                'direccion'=> 'required',
            ],
            'update' => [
                'id' => 'required|unique:pacientes,id,'.$this->id,
                'nombres' => 'required',
                'apellidos' => 'required',
                'edad' => 'required',
                'dni' => 'required|unique:pacientes,dni,'.$this->id,
                'tipo_sangre' => 'required',
                'telefono' => 'required',
                'correo'=> 'required|unique:pacientes,correo,'.$this->id,
                'direccion'=> 'required',
            ]
        ];
        if(!isset($rules[$scenario]))
            throw new \Exception('Scenario '.$scenario.' not exist');
        return $rules[$scenario];
    }

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
    }
}
