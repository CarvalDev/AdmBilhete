<?php

namespace Database\Factories;

use App\Models\Bilhete;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bilhete>
 */
class BilheteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Bilhete::class;
    public function definition()
    {
        return [
        'qrCodeBilhete' => 'pendente',
        'numBilhete' => fake()->numerify('### ### ###'),
        'tipoBilhete' => fake()->randomElement(['Estudante', 'Comum', 'Idoso']),
        'gratuidadeBilhete' => fake()->boolean(),
        'meiaPassagensBilhete' => fake()->boolean(),
        'statusBilhete' => fake()->randomElement(['Ativo', 'Inativo']),
        ];
    }
}
