<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Settings;

class UpdateChildRequest extends Request
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
        $settings = Settings::find(1);
        $rules = [
            'name' => 'required|min:1|max:60',
            'lastName' => 'required|min:1|max:60',
            'sex' => 'required|integer|between:0,1',
            'age' => 'required|integer|between:'.$settings->daycare_min_age.','.$settings->daycare_max_age,
            'waitinglist' => 'required|integer|between:0,1'
        ];

        return $rules;
    }
}
