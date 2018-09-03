<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticeRequest extends FormRequest
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
            //
            'not_name'=>'required',
            'not_desc'=>'required'
        ];
    }

    public function messages(){
       return [ 
        'not_name.required' =>'Notice Name Required.',  
        'not_desc.required' =>'Notice Description Required.'  
         
       ]; 
    }
}
