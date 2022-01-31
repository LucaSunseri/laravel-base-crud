<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicFormRequest extends FormRequest
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
            'title' => 'required|min:2|max:200',
            'description' => 'required|min:10',
            'thumb' => 'required|min:2|max:255',
            'price' => 'required|numeric|between:1,999.99',
            'series' => 'required|min:2|max:150',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|min:2|max:100',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Il campo del titolo è obbligatorio",
            'title.min' => "Il titolo deve essere di almeno :min caratteri.",
            'title.max' => "Il titolo non può superare i :max caratteri.",
            'description.required' => "Il campo della descrizione è obbligatorio",
            'description.min' => "La descrizione deve essere di almeno :min caratteri.",
            'sale_date.required' => "Il campo data di vendita è obbligatorio",
            'sale_date.date_format' => "Inserire la data in formato Y-m-d",

        ];
    }
}
