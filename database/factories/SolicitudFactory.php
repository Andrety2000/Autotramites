<?php

namespace Database\Factories;

use App\Models\Solicitud;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SolicitudFactory extends Factory
{
        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Solicitud::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_completo' => $this->faker->nombre_completo(),
            'tipo_documento' => $this->faker->tipo_documento(),
            'numero_documento' => $this->faker->numero_documento(),
            'departamento' => $this->faker->departamento(),
            'municipio' => $this->faker->municipio(),
            'servicio' => $this->faker->servicio(),
            'descripcion' => $this->faker->descripcion(),
            'fecha_inicial' => $this->faker->fecha_inicial(),
            'observaciones' => $this->faker->observaciones(),
            'subir_pdf' => $this->faker->subir_pdf(),
        ];
    }
}
