<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //metterre true prima di tutto
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=> 'required | min:3',
            'description'=> 'required',
            'price'=> 'required',
        ];
    }
    //override del metodo messages per modificare i messaggi dell errore
    public function messages(){
        return[
            'name.required' => 'Non hai inserito il nome del prodotto',
            'name.min' => 'Il nome deve avere almeno 3 caratteri',
            'description.required' => 'Non hai inserito la descrizione del prodotto',
            'price.required' => 'Non hai inserito il prezzo del prodotto',
        ];
    }
}
