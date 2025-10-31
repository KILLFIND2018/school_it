<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                'regex:/^[A-Za-zА-Яа-яЁё\s\-]+$/u', // только буквы и дефис
            ],
            'phone' => [
                'required',
                'regex:/^\+7\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$/', // формат +7 (999) 123-45-67
            ],
            'age' => [
                'required',
                'integer',
                'between:1,99', //проверка целого числа диапазоном
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Введите имя.',
            'name.regex' => 'Имя может содержать только буквы и дефисы.',
            'phone.required' => 'Введите номер телефона.',
            'phone.regex' => 'Телефон должен быть в формате +7 (999) 123-45-67.',
            'age.required' => 'Введите возраст.',
            'age.regex' => 'Только число.',
        ];
    }

}
