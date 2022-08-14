<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
    public function rules()  //Se valida los compos de entrada y los datos almacenar
    {
        return [
            'name'->'required|string|max:50',
            'description'->'nulltable|string|max:250',   
        ];
    }
    public function messages (){  //Se muestra un mensaje
        return [
            'name.required'=>"Este campo es requerido",
            'name.string'=>"El valor ingresado no es el correcto",
            'name.max'=>"Solo se permiten 50 caracteres",
            //'description.required'=>"Este campo es requerido",
            'description.string'=>"El valor ingresado no es el correcto",
            'description.max'=>"Solo se permiten 250 caracteres",
        ];
    }
}
