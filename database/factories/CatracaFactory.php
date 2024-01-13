<?php

namespace Database\Factories;

use App\Models\Catraca;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Catraca>
 */
class CatracaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Catraca::class;
    public function definition()
    {
        return [
            'statusCatraca' => 'Ativa',
        ];
    }

    
}
