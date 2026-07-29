<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Override;

class ContactRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'name' => ['required','min:2','max:20'],
                'email' => ['required','email'],
                'subject'=> ['nullable','max:255'],
                'message'=> ['required','max:5000']
            ];
    }
    function messages()
    {
        return [
                'name.required' => 'Hey please fill the name field',
                'email.required' => 'Hey please fill the email',
                'name.max' => 'The max length of name have to 20 character',
                'name.min' => 'The min length of name have to 2 character',
                'subject.required'=> 'Hey Please fill the subject',
                'subject.max' => 'The max length of subject have to 255 character',
                'message.required'=> 'Hey Please fill the message',
                'message.max' => 'The max length of message have to 5000 character',
            ];
    }
}
