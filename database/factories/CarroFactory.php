<?php

namespace Database\Factories;

use App\Models\Carro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carro>
 */
class CarroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Carro::class;
    public function definition()
    {
        return [
            'numCarro' => fake()->numerify('###-###')
        ];
    }
}
