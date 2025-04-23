<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProcductRequest extends FormRequest
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
            'descripcion'=> 'required|string|max:100',
            'precio'=> 'required|numeric',
            'cantidad'=> 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'El campo :attribute es requerido',
            'numeric' => 'El campo :attribute debe ser un número',
            'string' => 'El campo :attribute debe ser una cadena de texto',
            'max' => 'El campo :attribute no debe exceder :max caracteres',
        ];
    }
    public function attributes()
    {
        return [
            'descripcion' => 'Descripción',
            'precio' => 'Precio',
            'cantidad' => 'Cantidad',
        ];
    }
}
