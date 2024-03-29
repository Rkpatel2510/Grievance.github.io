<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class management extends FormRequest
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
            'subject' => 'bail|required',
            'grievance' => 'bail|required',
        ];
    }

    public function messages()
    {
        return [
            'subject.required' => 'Please enter subject',
            'grievance.required' => 'Please enter grievance'
        ];
    }
}
