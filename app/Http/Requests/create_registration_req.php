<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class create_registration_req extends Request
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
            'first_name'=>'required|alpha',
            'mid_name'=>'required|alpha',
            'last_name'=>'required',

            'gender'=>'required',
            'DOB'=>'required',

            'mobile'=>'required',
            'email'=>'required|email',
            'image'=>'mimes:jpeg,bmp,png',
            'city'=>'alpha_num',

            'session'=>'required|alpha',
            'admission_no'=>'required',
            'region_id'=>'required',
            'school_id'=>'required',
            'academic_year'=>'required',
            'roll_no'=>'',
            'payment_type'=>'required',
            'certificate_no'=>'',
            'grade'=>'required',
            'on_basis_of'=>'',
            'registration_amount'=>'required',
            'remark'=>'',
            'receipt_no'=>'required|alpha_num',

            'region_id.required' => 'We need to know your e-mail address!',
        ];
    }
    public function messages()
    {
        return [
            'region_id.required' => 'The Region Field is required',
            'school_id.required' => 'The School Field is required',
            'image.image' => 'The photo field must be an image type',
            'DOB.required' => 'The Date of birth Field is required',
            'category.min' => 'Please associate this link with a category'
        ];
    }
}
