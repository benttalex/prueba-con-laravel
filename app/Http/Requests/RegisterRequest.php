<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            'name' => [ 'required'],
            'email' => [ 'required', 'email', 'unique:users,email'],
            'password' => [ 'required', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()->symbols()]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Este campo es obligatorio',
            'email.required' => 'Este campo es obligatorio',
            'email.email' => 'Ingrese una dirección de correo valida',
            'email.unique' => 'Este correo ya existe, favor de validar',
            'password.required' => 'Este campo es obligatorio',
            'password.confirmed' => 'Los passwords no coinciden',
            'password.min' => 'La password debe contener minimo 8 caracteres',
            'password.letters' => 'La password debe contener letras',
            'password.mixedCase' => 'La password debe contener letras mayusculas y minusculas',
            'password.numbers' => 'La password debe contener numeros',
            'password.symbols' => 'La password debe contener un caracter especial',
        ];
    }
}
