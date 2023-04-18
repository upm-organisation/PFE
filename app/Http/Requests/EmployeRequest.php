<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeRequest extends FormRequest
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
            'salary' => [
                'numeric',
            ],
            'startWorkTime' => [
                'date_format:H:i',
            ],
            'endtWorkTime' => [
                'date_format:H:i',
            ],
            'role' => [
                'required',
                'string',
            ],
        ];
        if ($this->method() == Request::METHOD_POST) {
            $users_ids = User::all()->map(function ($user, $index) {
                return $user->id;
            });
            $rules['user_id'] = [
                'required',
                'numeric',
                Rule::in($users_ids),
            ];
        }
        return $rules;
    }
}
