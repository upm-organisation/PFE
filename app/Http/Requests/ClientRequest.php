<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\User;

class ClientRequest extends FormRequest
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
        $users_ids = User::all()->map(function ($user, $index) {
            return $user->id;
        });
        return [
            'user_id' => [
                'required',
                'numeric',
                Rule::in($users_ids),
            ],
            'notes' => [
                'sometimes',
                'numeric',
                'min:0',
                'max:5',
            ],
        ];
    }
}
