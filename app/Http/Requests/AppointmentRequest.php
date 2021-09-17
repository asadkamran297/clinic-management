<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title' => 'required',
            'name' => 'required',
            'dob' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'doctor_name' => 'required',
            'amount' => 'required',
            'injury' => 'required',
            'notes' => 'required',
        ];

        return $rules;
    }
}
