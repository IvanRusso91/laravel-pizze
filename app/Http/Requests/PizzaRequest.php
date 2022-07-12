<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PizzaRequest extends FormRequest
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
            'nome' => 'required|max:255|min:3',
            'immagine' => 'required|max:255',
            'prezzo' => 'required|numeric',
            'popolarita' => 'integer',
            // 'ingredienti' => 'required|max:255|min:10|',
            'vegetariana' => 'required'
        ];
    }
    public function messages(){
        return [
            'nome.require' => 'Il nome è obbligatorio',
            'nome.max' => 'Il nome deve essere lungo al massimo :max carattere',
            'nome.min' => 'Il nome deve essere lungo almeno :min carattere',

            'immagine.require' => 'Il campo immagine è obbligatorio',
            'immagine.max' => 'Il campo immagine deve essere lungo al massimo :max carattere',

            'prezzo.required' => 'Il prezzo è obbligatorio',
            'prezzo.numeric' => 'Il prezzo deve essere un numero',

            'popolarita.integer' => 'La popolarità deve essere un numero',

            // 'ingredienti.require' => 'Il campo ingredienti è obbligatorio',
            // 'ingredienti.max' => 'Il campo ingredienti deve essere lungo al massimo :max carattere',
            // 'ingredienti.min' => 'Il campo ingredienti deve essere lungo almeno :min carattere',

            'vegetariana.required' => 'Il campo è obbligatorio',
        ];
    }
}
