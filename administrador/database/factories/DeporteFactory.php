<?php

namespace Database\Factories;

use App\Models\Deporte;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DeporteFactory extends Factory
{
    protected $model = Deporte::class;

    public function definition()
    {
        return [
			'nombre_actividad' => $this->faker->name,
			'edad' => $this->faker->name,
			'lugar' => $this->faker->name,
			'dias' => $this->faker->name,
			'grupo1' => $this->faker->name,
			'grupo2' => $this->faker->name,
			'grupo3' => $this->faker->name,
			'grupo4' => $this->faker->name,
			'grupo5' => $this->faker->name,
			'horario_grupo1' => $this->faker->name,
			'horario_grupo2' => $this->faker->name,
			'horario_grupo3' => $this->faker->name,
			'horario_grupo4' => $this->faker->name,
			'horario_grupo5' => $this->faker->name,
			'nombre_profesor' => $this->faker->name,
			'costo_clase' => $this->faker->name,
			'costo_mensual_paquete1' => $this->faker->name,
			'costo_mensual_paquete2' => $this->faker->name,
			'costo_mensual_paquete3' => $this->faker->name,
			'costo_mensual_paquete4' => $this->faker->name,
        ];
    }
}
