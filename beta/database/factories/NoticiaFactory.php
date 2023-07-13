<?php

namespace Database\Factories;

use App\Models\Etiqueta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Noticia>
 */
class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'visualizaciones' => $this->faker->numberBetween(1,4000),
            'publicado' => $this->faker->boolean(),
            'user_id' => $this->faker->numberBetween(1,4),
            'empresa_id' => $this->faker->numberBetween(1,9),
            'categoria_id' => $this->faker->numberBetween(1,7),
            'etiqueta_id' => $this->faker->numberBetween(1,26),
            'fecha' => $this->faker->date(),
            'titulo' => $this->faker->sentence(),
            'subtitulo' => $this->faker->sentence(),
            'cuerpo' => $this->faker->paragraphs(4, true),
            'enlacefotos' => $this->faker->slug(),
            'enlacevideos' => $this->faker->slug(),
            'adjunto' => $this->faker->slug(),
            'imagen' => $this->faker->slug(),
        ];
    }
}