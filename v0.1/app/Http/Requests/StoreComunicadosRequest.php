<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComunicadosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'categorias_comunicado' => 'required',
            'fecha_com' => 'required',
            'fecha_subida' => 'required',
            'id_empresa' => 'required',
            'adjunto1' => ['mimes:jpg,png,jpeg', 'max:5048'],
            'min_to_read' => 'min:0|max:60',
            'titulo' => 'required',
            'subtitulo' => 'required',
            'descripcion' => 'required'
        ];

        // if(in_array($this->method(),['POST'])) {
        //     $rules['image'] = ['required', 'mimes:jpg,png,jpeg', 'max:5048'];
        // }

        return $rules;
    }
}
