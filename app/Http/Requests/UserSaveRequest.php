<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserSaveRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->get('id');

        $password = ['confirmed'];
        if (empty($id)) {
            $password [] = 'required';
        }

        return [
            'first_name' => [
                'required',
                'max:191'
            ],
            'last_name' => [
                'required',
                'max:191'
            ],
            'email' => [
                'required',
                'max:191',
                'unique:users,email' . ($id ? ',' . $id : '')
            ],
            'password' => $password
        ];
    }

    public function messages()
    {
        return [];
    }
}
