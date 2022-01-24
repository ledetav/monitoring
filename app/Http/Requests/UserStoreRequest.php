<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'username' => 'required|max:25|unique:users,username',
            'password' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'Это поле является обязательным.',
            'username.max' => 'Максимальная длина имени пользователя — 25 символов.',
            'username.unique' => 'Пользователь с таким именем уже зарегистрирован. ',
            'password' => 'Это поле является обязательным.',
        ];
    }
}
