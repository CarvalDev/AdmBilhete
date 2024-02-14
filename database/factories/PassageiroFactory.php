<?php

namespace Database\Factories;

use App\Models\Acao;
use App\Models\Compra;
use App\Models\FormaPagamento;
use App\Models\Passageiro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Passageiro>
 */
class PassageiroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Passageiro::class;

    // public function configure(){
    //     return $this->afterMaking(function(Passageiro $passageiro){
            
            
    //     })->afterCreating(function(Passageiro $passageiro){
    //        $passageiro->acaos(Acao::factory()->count(10)->for($passageiro)->has(Compra::factory()->count(1)->for(FormaPagamento::find(1))->for(Acao::find(1))))->create(['tipoAcao' => 'compra', 'dataAcao' => '2024-01-06 00:00:00']);
            
    //     });
    // }
    public function definition()
    {
        return [
        'nomePassageiro' => fake()->name(),
        'dataNascPassageiro' => fake()->date(),
        'generoPassageiro' => fake()->randomElement(['M','F']),
        'cpfPassageiro' => fake()->numerify('###.###.###-##'),
        'numTelPassageiro' =>  fake()->unique()->phoneNumber(),
        'logrPassageiro' => fake()->address(),
        'numLogrPassageiro' => fake()->randomDigit(3),
        'complementoLogrPassageiro' => 'casa1',
        'ufPassageiro' => 'sp',
        'bairroPassageiro' => 'São Miguel Nases',
        'cepPassageiro' => fake()->randomDigit(8),
        'fotoPassageiro' => null,
        'emailPassageiro' => fake()->unique()->email(),
        'password' => null,
        ];
    }
}
