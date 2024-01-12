<?php

namespace Database\Factories;

use App\Models\Suporte;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suporte>
 */

class SuporteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Suporte::class;
    public function definition()
    {
        return [
        'categoriaSuporte' => fake()->randomElement(['Bilhetes', 'Compras', 'Uso', 'Falhas']),
        'descSuporte' => fake()->paragraph()
    ];
        
    }
}
