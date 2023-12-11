<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComunicadoRequest extends FormRequest
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
            'numero' => 'required',
            'empresa_id' => 'nullable',
            'categoria_id' => 'nullable',
            'fecha' => 'required|date',
            'titulo' => 'required',
            'subtitulo' => 'required',
            'cuerpo' => 'required',
            'pdf' => 'nullable|mimetypes:application/pdf|max:10000',
            'imagen' => 'nullable|image',
            'adjunto' => 'nullable|mimetypes:application/pdf|max:10000',
        ];
    }
}