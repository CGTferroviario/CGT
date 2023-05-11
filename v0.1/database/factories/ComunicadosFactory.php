<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Comunicado;
use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ComunicadosFactory extends Factory
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
            'categorias_comunicado' => Categoria::factory(),
            'id_empresa' => Empresa::factory(),

            'category_id' => $this->faker->number(),
            'fecha_com' => $this->faker->date(),
            'fecha_subida' => $this->faker->date(),
            'titulo' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'subtitulo' => '<p>' . implode('</p><p>', $this->faker->paragraphs(2)) . '</p>',
            'descripcion' => '<p>' . implode('</p><p>', $this->faker->paragraphs(6)) . '</p>',
        ];
    }
}	
