<?php

namespace Database\Factories;

use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ServicioFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Servicio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'descripcion' => $this->faker->descripcion(),
            'subir_pdf' => $this->faker->subir_pdf(),
            'servicio' => $this->faker->servicio(),
        ];
    }
}
