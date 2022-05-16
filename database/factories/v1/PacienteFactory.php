<?php

namespace Database\Factories\v1;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'edad' => $this->faker->randomNumber(2,false),
            'dni' => $this->faker->randomNumber(9,true),
            'tipo_sangre' => $this->faker->randomElement(['O+', 'O-', 'A+', 'A-', 'B+', 'B-']),
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'telefono' => $this->faker->phoneNumber(),
            'correo' => $this->faker->email(),
            'direccion' => $this->faker->address(),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
    }
}
