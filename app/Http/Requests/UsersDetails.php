<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersDetails extends FormRequest
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
            'email' => 'required|email|max:250',
            'name' => 'required|max:200',
            'address' => 'required|max:250',
            'country' => 'required'
        ];
    }
}
