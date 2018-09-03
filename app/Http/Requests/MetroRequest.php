<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MetroRequest extends FormRequest
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
            'metro_name'=>        'required' 
        ];
        return $rules;
    }

    public function messages(){
       return [ 
        'metro_name.required' =>'Insert Metro Name.'  
         
       ]; 
    }
}
