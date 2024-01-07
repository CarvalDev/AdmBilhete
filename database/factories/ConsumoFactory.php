<?php

namespace Database\Factories;

use App\Models\Consumo;
use App\Models\Passagem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consumo>
 */
class ConsumoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Consumo::class;
    public function definition()
    {
        return [
            'passagem_id' => (fake()->numberBetween(1, 800)),
            'carro_id' => (fake()->numberBetween(1, 300))
        ];
    }
}
