<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateSettingsRequest extends Request
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
        $input = $this->all();

        $minAge = $input['minAge'];
        $maxAge = $input['maxAge'];

        $validationRules = [
            'numberAttendees' => 'required|integer|min:1|max:1000',
            'numberChildren' => 'required|integer|min:1|max:1000',
            'minAge' => 'required|integer|min:0|max:'.$maxAge,
            'maxAge' => 'required|integer|min:'.$minAge.'|max:17',
        ];

        return $validationRules;
    }

    public function messages() {
        return [
            'minAge.max' => 'La edad mínima tiene que ser menor o igual a la edad máxima',
            'maxAge.min' => 'La edad máxima tiene que ser mayor o igual a la edad mínima'
        ];
    }
}
