<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRequest extends FormRequest
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
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'identification'=>'required',
            'phone_number'=>'required|max:12',
            'location'=>'required',
            'college'=>'required',
            'education'=>'required',
            'graduation_year'=>'required',
            'graduation_month'=>'required',
            'interest'=>'required',
            'programme'=>'required'
        ];
    }
}
