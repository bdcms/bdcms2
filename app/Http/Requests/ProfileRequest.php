<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'user_name'        => 'required', 
            'user_email'       => 'required|email|unique:users,user_email', 
            'user_mobile'      => 'required|numeric', 
            'user_address'     => 'required', 
            'role_id'          => 'required', 
            'user_posting'     => 'required' ,
            'user_fname'       => 'required', 
            'user_gender'      => 'required' 
        ];
        return $rules;
    }

    public function messages(){
       return [ 
            'user_name.required'        =>'Profile name field required.',
            'email.required'            =>'Email name field required.',
            'email.email'               =>'This is not a valid email.', 
            'user_mobile.required'      => 'Contact field required.', 
            'user_address.required'     => 'Address field required.', 
            'role_id.required'          => 'Select User Role.', 
            'user_posting.required'     => 'Working area field required.' ,
            'user_fname.required'       => 'F-Name field required.' ,
            'user_gender.required'       => 'Gender field required.' 
       ]; 
    }
}
