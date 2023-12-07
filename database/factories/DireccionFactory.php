<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Municipio;
use App\Models\Estado;
use App\Models\Sitio;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Direccion>
 */
class DireccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'calle' => $this->faker->streetName,
            'num' => $this->faker->buildingNumber,
            'colonia' => $this->faker->city,
            'id_municipio1' => Municipio::factory(),
            'id_estado1' => Estado::factory(),
            'id_sitio1' => Sitio::factory(),
        ];
    }
}
