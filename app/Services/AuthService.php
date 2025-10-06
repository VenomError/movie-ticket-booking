<?php

namespace App\Services;

use App\Enum\UserRole;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    /**
     * Summary of register
     * @param array $data ['name','email','password']
     */
    public function register(array $data)
    {
        $user = new User($data);

        $user->save();

        return $this->login($user->email, $data['password'], true);
    }

    public function login(
        string $email,
        string $password,
        bool $remember = false
    ) {
        $islogin = Auth::attempt(['email' => $email, 'password' => $password], $remember);
        if (!$islogin) {
            throw new \Exception("Login Failed , Invalid Email or Password");
        }

        $user = Auth::user();
        flash('Login Success !!');
        if ($user->role == UserRole::Admin) {
            return redirect('/dashboard');
        } else {
            return redirect('/');
        }
    }
}
