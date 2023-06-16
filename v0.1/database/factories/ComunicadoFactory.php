<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Comunicado;
use App\Models\Empresa;
use App\Models\Etiqueta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ComunicadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Comunicado::class;
    
    public function definition()
    {
        return [
            'numero' => $this->faker->randomDigit(),
            'empresa' => Empresa::factory(),
            'etiqueta' => Etiqueta::factory(),
            'categoria' => Categoria::factory(),
            'fecha' => $this->faker->date(),
            'titulo' => $this->faker->sentence(),
            'subtitulo' => implode($this->faker->paragraphs(1)),
            'cuerpo' => implode($this->faker->paragraphs(6)),

            'adjunto1' => $this->faker->slug(),
            'adjunto2' => $this->faker->slug(),
            'adjunto3' => $this->faker->slug(),
            'imagen' => $this->faker->slug(),

        ];
    }
}