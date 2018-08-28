<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        $rules = [ 
            'email'=>        'required',
            'password'=>        'required|min:6'
        ];
        return $rules;
    }

    public function messages(){
       return [ 
        'email.required' =>'Please insert login email.', 
        'password.size'  =>'Password min 6 digits.'
         
       ]; 
    }
}
