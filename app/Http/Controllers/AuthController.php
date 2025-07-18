<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Helper\ResponseHelper;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;


class AuthController extends Controller
{

    public function __construct(protected AuthService $authService)
    {}

    public function login(LoginRequest $request)
    {
        $result = $this->authService->login($request->only('email', 'password'));
        return ResponseHelper::success($result, 'User logged in successfully');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->only('name', 'email', 'password');
        $result = $this->authService->register($data);

        if($result['success']) {
            return ResponseHelper::success($result['auth_user'], 'User register success');
        }
    }
}
