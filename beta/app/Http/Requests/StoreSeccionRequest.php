<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSeccionRequest extends FormRequest
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
            'nombre' => 'required',
            'email' => 'nullable',
            'email2' => 'nullable',
            'telefono' => 'required',
            'direccion' => 'nullable',
            'descripcion' => 'nullable',
            'responsable' => 'required',
            'ccaa_id' => 'required',
            'provincia_id' => 'required',
            'municipio_id' => 'required',
        ];
    }
}