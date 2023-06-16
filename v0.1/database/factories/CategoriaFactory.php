<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Categoria::class;
    
    public function definition()
    {
        return [
            'id_empresa' => $this->faker->randomDigit(),
            'cod_categoria' => $this->faker->unique()->word(),
            'nombre' => $this->faker->unique()->word(),
            'colegio_electoral' => $this->faker->randomLetter(),
            'fecha_alta' => $this->faker->date(),
            'fecha_baja' => $this->faker->date()
        ];
    }
}