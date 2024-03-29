<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServicio extends FormRequest
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

            'nombre' => 'required',
            'servicio'  => 'required',
            'descripcion' => 'required',

        ];
    }


    public function attributes()
    {
        return[
            'name' => 'Nombre del Servicio',
        ];
    }

    public function messages()
    {
        return [
        'descripcion.required' => 'Debe ingresar una descripcion del servicio'
        ];
    }

}
