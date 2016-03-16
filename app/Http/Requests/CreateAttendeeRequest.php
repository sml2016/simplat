<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Settings;

class CreateAttendeeRequest extends Request
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
        $input = $this->all();

        $validationRules = [
            'name' => 'required|min:1|max:60',
            'lastname' => 'required|min:1|max:60',
            'email' => 'required|email|unique:attendees',
            'phonenumber' => 'required|min:10|max:16',
            'daycarenumber' => 'integer|between:0,2'
        ];

        if (array_key_exists('daycarenumber', $input)) {
            $daycarenumber = $input['daycarenumber'];
            $needsdaycare = $input['needsdaycare'];

            if (!empty($needsdaycare) && $needsdaycare == 'no') {
                $daycarenumber = 0;
            }

            if ($daycarenumber > 0 && $daycarenumber <= 2)
            {
                if ($daycarenumber >= 1)
                {
                    $validationRules = array_merge($validationRules, [
                        'child1name' => 'required|min:1|max:60',
                        'child1lastname' => 'required|min:1|max:60',
                        'child1sex' => 'required|integer|between:0,1',
                        'child1age' => 'required|integer|between:'.$settings->daycare_min_age.','.$settings->daycare_max_age
                    ]);
                }
                if ($daycarenumber == 2)
                {
                    $validationRules = array_merge($validationRules, [
                        'child2name' => 'required|min:1|max:60',
                        'child2lastname' => 'required|min:1|max:60',
                        'child2sex' => 'required|integer|between:0,1',
                        'child2age' => 'required|integer|between:'.$settings->daycare_min_age.','.$settings->daycare_max_age
                    ]);
                }
            }
        }

        return $validationRules;
    }

    public function messages() {
        return [
            'child1name.required' => 'Child 1 name is required',
            'child1lastname.required' => 'Child 1 last name is required',
            'child1name.min' => 'Child 1 name should be at lest :min characters',
            'child1name.max' => 'Child 1 name should be less than :max characters long',
            'child2name.required' => 'Child 2 name is required',
            'child2lastname.required' => 'Child 2 last name is required',
            'child2name.min' => 'Child 2 name should be at lest :min characters',
            'child2name.max' => 'Child 2 name should be less than :max characters long',
        ];
    }

}
