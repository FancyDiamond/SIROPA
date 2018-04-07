<?php

namespace Siropa\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdquisicionCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'nombre_proyecto'=>'required',
            'numero_proyecto'=>'required',
            'region'=>'required',
            'localidad'=>'required',
            'nombre_empresa'=>'required',
            'direccion'=>'required',
            'municipio_id'=>'required',
        ];
    }
}
