<?php

namespace Database\Factories;

use App\Models\Catraca;
use App\Models\Linha;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Linha>
 */
class LinhaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Linha::class;

     
    public function definition()
    {
        return [
            'numLinha' => fake()->numerify('####-##'),
            'nomeLinha' => fake()->city(),
            'statusLinha' => 'Ativa',
        ];
    }
}
