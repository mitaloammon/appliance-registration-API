<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppliancePost extends FormRequest
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
            'nome' => 'required',
            'voltage' => 'required|in:110,220',
            'description' => 'required',
            'brand_product' => 'required|in:Electrolux,Brastemp,Fischer,Samsung,LG',
        ];
    }

    public function messages()
    {
        return [
            'name' => 'O campo nome é obrigatório.',
            'voltage' => 'O campo voltagem é obrigatório.',
            'brand_product' => 'Digite a marca do produto.',
        ];
    }
}
