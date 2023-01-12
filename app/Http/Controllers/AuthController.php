<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserCollection;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{

    public function register(RegisterRequest $request){
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $token = JWTAuth::fromUser($user);
        return successResponse(null, $this->respondWithToken($token));
    }

    public function login()
    {
        $credentials = request(['email', 'password']);
        if (! $token = auth()->attempt($credentials)) {
            return failResponse('Wrong email or password');
        }
        return successResponse(null, $this->respondWithToken($token));
    }

    public function profile()
    {
        $user = new UserCollection(auth()->user());
        return successResponse(null, $user);
    }


    public function logout()
    {
        if (auth()->user()) {
            auth()->logout();
            return successResponse();
        }
        return response()->json([
            'status' => false,
            'message' => 'Unauthorized',
            'data' => null
        ], 401);
    }

    public function refresh()
    {
        $token = JWTAuth::getToken();
        if (!$token) {
            return failResponse('Token not provided');
        }
        try {
            $token = auth()->refresh();
            return successResponse(null, $this->respondWithToken($token));
        } catch (\Throwable $th) {
            return failResponse('The token is invalid');
        }
    }


    protected function respondWithToken($token)
    {
        return [
            'access_token' => $token,
        ];
    }
}
