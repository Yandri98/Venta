<?php

namespace App\Http\Requests\Provider;

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
    public function rules()
    {
        return [
            'name'->'required|string|max:255',
            'email'->'required|email|string|max:200|unique:providers',
            'ruc_number'->'required|string|max:13|min:13|unique:providers',
            'address'->'nullable|string|max:250',
            'phone'->'required|string|max:50|unique:providers',
        ];
    }
    public function messages (){  //Se muestra un mensaje
        return [
            'name.required'=>"Este campo es requerido",
            'name.string'=>"El valor ingresado no es el correcto",
            'name.max'=>"Solo se permiten 255 caracteres",

            'email.required'=>"Este campo es requerido",
            'email.string'=>"Ingrese un Email correcto",
            'email.max'=>"Solo se permiten 200 caracteres",

            'ruc_number.required'=>"Este campo es requerido",
            'ruc_number.string'=>"El valor ingresado no es el correcto",
            'ruc_number.max'=>"El ruc es de 11 caracteres",
            'ruc_number.min'=>"El ruc es de 11 caracteres",

            'address.required'=>"Este campo es requerido",
            'address.string'=>"El valor ingresado no es el correcto correcto",
            'address.max'=>"Solo se permiten 250 caracteres",
            
            'phone.required'=>"Este campo es requerido",
            'phone.string'=>"El valor ingresado no es el correcto correcto",
            'phone.max'=>"Solo se permiten 50 caracteres",
        ];
        
    }
}
