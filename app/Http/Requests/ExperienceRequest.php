<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            "entreprise" => 'required',
            "lien_entreprise" => 'required',
            "contrat" => 'required',
            "outils" => 'required',
            "environnement" => 'required',
            "debut_experience" => 'required',
            "fin_experience" => 'required',
        ];
    }
}
