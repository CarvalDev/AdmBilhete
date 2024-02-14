<?php

namespace Database\Factories;

use App\Models\Compra;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compra>
 */
class CompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Compra::class;
    public function definition()

    {
        $fakeNumber = fake()->numberBetween(2, 20);
        return [ 
            'qtdPassagensCompra' => 4,
            'valorTotalCompra' => 4*4.4,
        ];
    }
}
