<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarInfoSearch extends FormRequest
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
            'district'      => 'required|exists:tbl_car_reg,district',
            'digits'        => 'required|exists:tbl_car_reg,keyword|max:3',
            'number'        => 'required|numeric|digits:6'
        ];
        return $rules;
    }

    public function messages(){
       return [
        'district.required'     =>'District field required.',
        'district.exists'       =>'District are not exists.', 
        'digits.required'       =>'Digits field required.',
        'digits.exists'         =>'Invalid Keyword digits.', 
        'number.required'       =>'Number field required.'  
       ]; 
    }

}
