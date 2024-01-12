<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class MemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'sponsor_id'=>'required | min:2', //| exists:members,username
            'username'=>'required | min:2',
            'email'=>'required',
            'age'=>'required | numeric',
            // 'start_date' => 'required|date|after:tomorrow',
            // 'finish_date' => 'required|date|after:start_date',
            'password' => [
                'required',
                'min:6'
            ]
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'username.required'=>'User Name is required.',
    //         'username.lowercase'=>"User Name Must be Lowercase."
    //     ];
    // }
    public function attributes()
    {
        return [
            'username'=>'User Name',
            'email'=>'Email Address'
        ];
    }
    // protected function prepareForValidation() : void
    // {
    //     $this->merge([
    //         'username'=>Str::slug($this->username),
    //         // 'username'=>strtoupper($this->username),
    //         // 'password'=>hash($this->password,true),
    //     ]);
    // }
    protected $stopOnFirstFailure = true;
}
