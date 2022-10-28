<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarPedido extends FormRequest
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
        return [
            'txtNombre'=>'required|max:50',
            'txtDescripcion'=>'required| max:600',
            'txtPrecio'=>'required| max:50',
            'txtFecha'=>'required| date'
        ];
    }
}
