<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name' => 'required|integer',
            'voltage' => ['required', Rule::in(['110v', '220v'])],
            'brand_product' => [
                'required', Rule::in(['Electrolux', 'Brastemp', 'Fischer', 'Samsung', 'LG'])
            ],
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
