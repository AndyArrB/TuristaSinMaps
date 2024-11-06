<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegistro extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtnombre' => 'required|string|min:3|max:20',
            'txtapellido' => 'required|string|min:3|max:20',
            'txtemail' => 'required|email',
            'txttelefono' => 'required|numeric|digits_between:10,15',
            'txtcontraseña' => 'required|string|min:8',
            'txtconfirmarcontraseña' => 'required|string|same:txtcontraseña'
        ];
    }
}