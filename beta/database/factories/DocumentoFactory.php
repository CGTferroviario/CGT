<?php

namespace Database\Factories;

use App\Models\Documento;
use App\Models\Etiqueta;
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
            'user_id' => $this->faker->numberBetween(1,4),
            'empresa_id' => $this->faker->numberBetween(1,5),
            'categoria_id' => $this->faker->numberBetween(1,10),
            'fecha' => $this->faker->date(),
            'titulo' => $this->faker->sentence(8),
            'descripcion' => $this->faker->paragraph,
            'pdf' => '/storage/documentos/documento1.pdf',
            'imagen' => '/storage/documentos/documento1.jpg',
            'vigente' => $this->faker->boolean(),
            // 'pdf' => $this->faker->file(
            //     'public/storage/documentos',
            //     storage_path('app/public/documentos'),
            //     false
            // ),
        ];
        
    }
}

