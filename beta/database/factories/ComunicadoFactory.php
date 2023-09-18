<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comunicado>
 */
class ComunicadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero' => fake()->unique()->numberBetween(1,100),
            // 'visualizaciones' => $this->faker->numberBetween(1,4000),
            // 'descargas' => $this->faker->numberBetween(1,4000),
            'publicado' => $this->faker->boolean(),
            'user_id' => $this->faker->numberBetween(1,4),
            'empresa_id' => $this->faker->numberBetween(1,9),
            
            'categoria_id' => $this->faker->numberBetween(1,7),
            
            'fecha' => $this->faker->date(),
            'titulo' => $this->faker->sentence(),
            'subtitulo' => $this->faker->sentence(),
            'cuerpo' => $this->faker->paragraphs(6, true),
            'pdf' => $this->faker->slug(),
            'imagen' => $this->faker->slug(),
            'adjunto' => $this->faker->slug(),
            
        ];
    }
}