<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
      $user = User::create([
          'pseudo' => $request->pseudo,
          'last_login' =>  Carbon::now(),
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password)
      ]);
      

      $tokenResult = $user->createToken('Personnal Access Token');

      $token = $tokenResult->token;

      $token->save();


      return response()->json([
          'status' => 200,
          'message' => 'User save successfully',
          'token' => $tokenResult->accessToken,
          'token_type' => 'bearer'
      ]);
    }
}
