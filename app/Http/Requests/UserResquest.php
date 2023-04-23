<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserResquest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'name' => [
                'required',
            ],
            'lastName' => [
                'required',
            ],
            'phone' => [
                'required',
            ],
            'gender' => [
                'required',
            ],
            'birthDate' => [
                'required',
                'date',
            ],
            'cin' => [
                'required',
            ],
            'adresse' => [
                'required',
            ],
        ];
        if ($this->method() == Request::METHOD_PUT) {
            $rules['password'] = [
                'sometimes',
            ];
        }
        return $rules;
    }
}
