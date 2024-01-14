<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAdmFormRequest extends FormRequest
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
        $rules = [
            'nomeAdm' => [
                'required',
                'string',
                'max:255',
                'min:3',
            ],
            'emailAdm' => [
                'required',
                'email'
            ],
            'senhaAdm' => [
                'required',
                'max:255',
                'min:3',
            ],
        ];
        
        return $rules;
    }
}
