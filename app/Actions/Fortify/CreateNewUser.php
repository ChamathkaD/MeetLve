<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'gender' => ['required', 'string', ],
            'day' => ['required', 'numeric', ],
            'month' => ['required', ],
            'year' => ['required', 'numeric', ],
            'privacy_Policy' => ['required',  ],

            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'gender' => $input['gender'],
            'day' => $input['day'],
            'month' => $input['month'],
            'year' => $input['year'],
            'privacy_Policy' => $input['privacy_Policy'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
