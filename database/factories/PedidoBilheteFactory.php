<?php

namespace Database\Factories;

use App\Models\PedidoBilhete;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PedidoBilhete>
 */
class PedidoBilheteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PedidoBilhete::class;

    public function definition()
    {
        return [
            'tipoBilhete' => fake()->randomElement(['Estudante Ins. Privada', 'PCD', 'Estudante']),
            'statusPedido' => 'Aberto',
            'passageiro_id' => fake()->numberBetween(1, 150),
            'created_at' => fake()->dateTimeBetween('-1 week', time())
        ];
    }
}
