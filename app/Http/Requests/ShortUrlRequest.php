<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShortUrlRequest extends FormRequest
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
            'url' => 'required|regex:/^(https:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        ];
    }

    public function messages()
    {
        return [
            'url.required' => 'required field',
            'url.regex' => 'invalid format',
        ];
    }
}
