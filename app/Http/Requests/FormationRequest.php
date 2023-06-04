<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormationRequest extends FormRequest
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
            "nom" => 'required',
            "libelle" => "required",
            "diplome" => "required",
            "ecole" => "required",
            'description' => 'required',
            "debut_formation" => "required",
            "fin_formation" => 'required'
        ];
    }
}
