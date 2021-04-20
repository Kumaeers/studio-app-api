<?php

namespace App\Http\Controllers\Manager;

use App\Entities\Manager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Http\Response;

/**
 * Class AuthController
 * @package App\Http\Controllers\Manager
 */
class AuthController extends Controller
{
    // guardインスタンを返す
    public function guard()
    {
        return Auth::guard('manager');
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email','password']);

        $token = $this->guard()->attempt($credentials);

        if (!$token) {
            return response()->json(
                ['error' => 'Unauthorized'],
                Response::HTTP_UNAUTHORIZED
            );
        }
        $tokenType = 'bearer';
        $ttl = $this->guard()->factory()->getTTL() * 60;

        return response()->json([            
            'access_token' => $token,
            'token_type' => $tokenType,
            'expires_in' => $ttl,
            ]
        );
    }
}
