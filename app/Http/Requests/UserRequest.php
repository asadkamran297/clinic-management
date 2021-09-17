<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'role_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users,email',
            'status' => 'required',
            'password' => 'required',
        ];
        
        if($this->user){
            if($this->has('password') && !$this->password || $this->has('email')){
                unset($rules['email']);
                unset($rules['password']);
                // unset($this->email);
                unset($this->password);
            }
        }

        return $rules;
    }
}
