<?php

namespace Database\Factories;

use App\Models\CartaoPassageiro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartaoPassageiro>
 */
class CartaoPassageiroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = CartaoPassageiro::class;
    public function definition()
    {
        
        return [
        'numeroCartao' => fake()->numerify('#### #### #### ####'),
        'nomeTitularCartao' => fake()->name(),
        'cpfTitularCartao' => fake()->numerify('###.###.###-##'),
        'bandeiraCartao' => fake()->randomElement(['Visa', 'MasterCard', 'Maestro']),
        'bancoCartao' => fake()->randomElement(['Banco do Brasil', 'Itaú', 'Bradesco', 'Nubank', 'C6']),
        'cvcCartao' => fake()->numerify('###'),
        'contaCartao' => fake()->numerify('########-#'),
        'agenciaCartao' => fake()->numerify('####'),
        'validadeCartao' => fake()->date(),
        'apelidoCartao' => fake()->name(),
        ];
    }
}
