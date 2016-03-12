<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateUserRequest extends Request
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

        $validationRules = [
            'fullname' => 'required|min:1|max:60',
            'email' => 'required|email'
        ];

        $changepassword = $input['changepassword'];

        if (!empty($changepassword))
        {
            if ($changepassword == 1) 
            {
                $validationRules = array_merge($validationRules, ['password' => 'required|confirmed|min:6|max:20']);
            }
        }

        return $validationRules;
    }
}
