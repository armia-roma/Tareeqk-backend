<?php

namespace App\Services;

use App\Exceptions\LoginFailedException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthService
{
    public function login(array $credentials)
    {
        if (!Auth::attempt($credentials)) {
            throw new LoginFailedException('Invalid credentials');
        }

        $user = Auth::user();
        $token = $user->createToken('auth-token')->plainTextToken;

        return [
            'user' => $user,
            'token' => $token,
        ];
    }
    public function register(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        $user = Auth::user();
        $token = $user->createToken('auth-token')->plainTextToken;
        $authUser = [
            'user' => $user,
            'token' => $token,
        ];
        return [
            'success' => true,
            'auth_user' => $authUser,
        ];
    }
}
