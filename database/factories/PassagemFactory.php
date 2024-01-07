<?php

namespace Database\Factories;

use App\Models\Passagem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Passagem>
 */
class PassagemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Passagem::class;
    public function definition()
    {
        return [
            'statusPassagem' => fake()->randomElement(['Ativa', 'Inativa']),
            'tempoRestantePassagem' => '00:00:00'
        ];
    }
}
