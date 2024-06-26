<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Empresa;
use App\Models\Etiqueta;
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
            'numero' => $this->faker->numberBetween(1,50),
            'publicado' => $this->faker->boolean(),
            // 'user_id' => $this->faker->boolean(),
            'user_id' => $this->faker->numberBetween(1,4),
            'empresa_id' => $this->faker->numberBetween(1,9),
            'categoria_id' => $this->faker->numberBetween(1,7),
            'etiqueta_id' => Etiqueta::factory(),
            'fecha' => $this->faker->date(),
            'titulo' => $this->faker->sentence(),
            'subtitulo' => $this->faker->sentence(),
            'cuerpo' => implode($this->faker->paragraphs(6)),
            'adjunto1' => $this->faker->slug(),
            'adjunto2' => $this->faker->slug(),
            'adjunto3' => $this->faker->slug(),
            'imagen' => $this->faker->slug(),

        ];
    }
}
