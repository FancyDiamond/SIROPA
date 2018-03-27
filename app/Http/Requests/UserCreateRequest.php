<?php

namespace Siropa\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'nombre'=>'required',
            'clave_fun'=>'required',
            'email'=>'required',
            'password'=>'required',
            'telefono'=>'required',
            'direccion'=>'required',
            'municipio'=>'required',
            'puesto'=>'required',
        ];
    }
}
