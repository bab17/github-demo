<?php

namespace App\Http\Requests;

use App\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'       => [
                'required',
            ],
            'email'      => [
                'required',
                'unique:users',
            ],
            'password'   => [
                'required',
            ],
            'roles.*'    => [
                'integer',
            ],
            'roles'      => [
                'required',
                'array',
            ],
            'first_name' => [
                'min:2',
                'max:50',
                'required',
            ],
            'last_name'  => [
                'min:2',
                'max:50',
                'required',
            ],
            'phone_no'   => [
                'min:2',
                'max:50',
            ],
            'city'       => [
                'min:2',
                'max:50',
            ],
            'state'      => [
                'min:2',
                'max:50',
            ],
            'zipcode'    => [
                'min:2',
                'max:20',
            ],
        ];
    }
}
