<?php

namespace Database\Factories;

use App\Models\Documento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Documento>
 */
class DocumentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Documento::class;

    public function definition(): array
    {        
        return [
            'visualizaciones' => $this->faker->numberBetween(1,4000),
            'descargas' => $this->faker->numberBetween(1,4000),
            'user_id' => $this->faker->numberBetween(1,4),
            'empresa_id' => $this->faker->numberBetween(1,9),
            'categoria_id' => $this->faker->numberBetween(1,7),
            'etiqueta_id' => $this->faker->numberBetween(1,26),
            'fecha' => $this->faker->date(),
            'titulo' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph,
            'ruta' => $this->faker->file(
                'public/storage/documentos',
                storage_path('app/public/documentos'),
                false
            ),
        ];
    }
}

