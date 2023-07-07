<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'logo' => $this->faker->url(),
            'gestion_vales' => $this->faker->boolean(),
            'comunicados' => $this->faker->boolean(),
            'activa' => $this->faker->boolean()
        ];
    }
}