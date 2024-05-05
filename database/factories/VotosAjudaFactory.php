<?php

namespace Database\Factories;

use App\Models\VotosAjuda;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VotosAjuda>
 */
class VotosAjudaFactory extends Factory
{
    protected $model = VotosAjuda::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'util' => fake()->randomElement(['1', '1', '0']),
            
        ];
    }
}
