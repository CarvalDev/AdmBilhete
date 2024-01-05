<?php

namespace Database\Factories;

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
        'fotoPassageiro' => 'foto.png',
        'emailPassageiro' => fake()->unique()->email(),
        'senhaPassageiro' => '123',
        ];
    }
}
