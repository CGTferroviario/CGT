<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSeccionRequest extends FormRequest
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
            'nombre' => ['required'],
            'email' => ['required'],
            'email2' => ['nullable'],
            'telefono' => ['required'],
            'direccion' => ['nullable'],
            'descripcion' => ['nullable'],
            'responsable' => ['required'],
            'ccaa_id' => ['required', 'exists:ccaas,id'],
            'provincia_id' => ['required', 'exists:provincias,id'],
            'municipio_id' => ['required', 'exists:municipios,id'],        
        ];
    }
}