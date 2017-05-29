<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployerRequest extends FormRequest
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
            'Company_name'=>'required',
            'location'=>'required',
            'phone'=>'required',
            'email'=>'required|email',
            'title'=>'required',
            'job_description'=>'max:255',
            'department'=>'required',
            'period'=>'required'
        ];
    }
}
