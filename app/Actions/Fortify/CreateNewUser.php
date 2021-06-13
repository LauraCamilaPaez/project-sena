<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

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
            'names' => ['required', 'string', 'max:255'],
            'lastnames' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
            'gender' => ['required', 'max:255'],
            'document_type' => ['required', 'max:255'],
            'document' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'names' => $input['names'],
            'lastnames' => $input['lastnames'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'gender' => $input['gender'],
            'document_type' => $input['document_type'],
            'document' => $input['document'],
            'phone' => $input['phone'],
            'mobile' => $input['mobile'],
        ]);
    }
}
