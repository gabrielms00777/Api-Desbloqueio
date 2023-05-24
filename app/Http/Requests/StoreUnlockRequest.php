<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUnlockRequest extends FormRequest
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
            'serial_number' => 'required|string',
            'company' => 'required|string',
            'cnpj' => 'nullable|string',
            'client_name' => 'required|string',
            'responsible' => 'required|string',
            'emergency' => 'boolean',
        ];
    }
}
