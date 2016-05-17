<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateAttendeeAdminRequest extends Request
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
            'name' => 'required|min:1|max:60',
            'lastname' => 'required|min:1|max:60',
            'email' => 'email',
            'phonenumber' => 'required|min:10|max:16',
            'waitinglist' => 'required|integer|between:0,1'
        ];
    }
}
