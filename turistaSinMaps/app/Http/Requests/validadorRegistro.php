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
            'txtcontraseña' => 'required|string|min:8'
        ];
    }

    public function messages(): array
    {
        return [
            'txtnombre.required' => 'El nombre es obligatorio',
            'txtapellido.required' => 'El apellido es obligatorio',
            'txtemail.required' => 'El correo electrónico es obligatorio',
            'txtemail.email' => 'El correo electrónico no es válido',
            'txtemail.unique' => 'Este correo electrónico ya está registrado',
            'txttelefono.required' => 'El teléfono es obligatorio',
            'txtcontraseña.required' => 'La contraseña es obligatoria',
            'txtcontraseña.min' => 'La contraseña debe tener al menos 8 caracteres'
        ];
    }

}
