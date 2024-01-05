<?php

namespace Database\Factories;

use App\Models\Acao;
use App\Models\Passageiro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Acao>
 */
class AcaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    protected $model = Acao::class;
    
     public function definition()
    {
        return [
            'dataAcao' => fake()->date(),
            'tipoAcao' => 'Compra',
        ];
    }

   
    
}
