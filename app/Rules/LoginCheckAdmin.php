<?php

namespace App\Rules;

use Closure;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\ValidationRule;

class LoginCheckAdmin implements ValidationRule
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
        $username = $this->request->input('username');
        $password = $this->request->input('password');
        $loginStatus = False;

        $cekusername = admin::where('nama', $username)->count();

        if ($cekusername > 0) {
            $adminPass = admin::where('nama', $username)->value('password');
            if (Hash::check($password, $adminPass)) {
                $loginStatus = TRUE;
            }
        }

        if ($loginStatus) {
            $ambilUser = admin::where('nama', $username)->first();
            Session::put('loginStatus', TRUE);
            Session::put('ambilUser', $ambilUser);
        } else {
            $fail('Email atau Password Salah');
        }
    }
}
