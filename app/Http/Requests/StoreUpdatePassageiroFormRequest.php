<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePassageiroFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id ?? '';

        $rules = [
            'nomePassageiro' => [
                'required',
                'string',
                'max:255',
                'min:3',
            ],
            'cpfPassageiro' => [
                'required',
                'unique:passageiros',
                'min:14',
            ],
            'generoPassageiro' => [
                'required',
            ],
            'dataNascPassageiro' => [
                'required'
            ],
            'cepPassageiro' => [
                'required',
                'min:9'
            ],
            'bairroPassageiro' => [
                'required'
            ],
            'ufPassageiro' => [
                'required'
            ],
            'logrPassageiro' => [
                'required'
            ],
            'numLogrPassageiro' => [
                'required'
            ], 
            'complementoLogrPassageiro' => [
                'nullable'
            ],
            'numTelPassageiro' => [
                'required',
                "unique:passageiros,numTelPassageiro,{$id},id",
            ],
            'emailPassageiro' => [
                'required',
                "unique:passageiros,emailPassageiro,{$id},id",
                'email'
            ],
            'senhaPassageiro' => [
                'required'
            ],
            'fotoPassageiro' => [
                'nullable',
                'image'
            ]


        ];
        return  $rules;
        
    }
}
