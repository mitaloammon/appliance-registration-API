<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEletrodomesticoPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'string|required|max:100',
            'tensao' => 'required|in:110,220',
            'descricao' => 'string|required|max:100',
            'marca' => 'string|required|in:Electrolux,Brastemp,Fischer,Samsung,LG',
        ];
    }
}
