<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StagiaireRequest extends FormRequest
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
            'nom'=>'required|min:3',
                'prenom'=>'required|min:3',
                'sexe'=>'required|min:1|max:6',
                'fillier'=>'required|min:4',
                'email'=>'required|min:4',
                'ville'=>'required|min:3',
                'age'=>'required|min:2|max:2',
                'tel'=>'required|min:10|max:10',
                'photo'=>'required',
                'dateN'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'nom.required'=>'the nom field is required ',
                'prenom.required'=>'the prenom field is required ',
                'sexe.required'=>'the sexe field is required ',
                'fillier.required'=>'the fillier field is required ',
                'email.required'=>'the email field is required ',
                'tel.required'=>'the tel field is required ',
                'ville.required'=>'the ville field is required ',
                'photo.required'=>'the photo field is required ',
                'dateN.required'=>'the date naissance field is required ',
                'age.required'=>'the age  field is required ',
        ];
    }
}
