<?php

namespace App\Http\Requests;

use App\Rules\NoTags;
use Illuminate\Foundation\Http\FormRequest;

class GuestCommentRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'email' => 'required|email',
            'text' => ['required', new NoTags],
            'published' => 'boolean',
            'g-recaptcha-response' => 'required|captcha',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле Имя является обязательным',
            'name.regex' => 'Некорректное имя пользователя, можно использовать только цифры и буквы латинского алфавита',
            'email.required' => 'Поле email является обязательным',
            'email.email' => 'Вы ввели н корректный email',
            'text.required' => 'Поле текст является обязательным',
            'published.boolean' => 'Передан неверный параметр статуса ',
            'g-recaptcha-response.required' => 'Пройдите капчу'
        ];
    }
}
