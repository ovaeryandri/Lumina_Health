<?php

namespace App\Rules;

use Closure;
use App\Models\AkunUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\ValidationRule;

class LoginCheck implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $email = $this->request->input('email');
        $password = $this->request->input('password');
        $loginStatus = False;

        $cekemail = AkunUser::where('email', $email)->count();

        if ($cekemail > 0) {
            $userPass = AkunUser::where('email', $email)->value('password');
            if (Hash::check($password, $userPass)) {
                $loginStatus = TRUE;
            }
        }

        if ($loginStatus) {
            $ambilUser = AkunUser::where('email', $email)->first();
            Session::put('loginStatus', TRUE);
            Session::put('ambilUser', $ambilUser);
        } else {
            $fail('Email atau Password Salah');
        }
    }
}
