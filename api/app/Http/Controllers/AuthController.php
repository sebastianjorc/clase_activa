<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Passport\Client;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('Password Token')->accessToken; 
            $success['name'] = $user->name;
            $success['username'] = $user->username;
            return response()->json($success, 200); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        }
    }
    
    public function logout()
    {
        Auth::user()->tokens->each(function ($token, $key) {
            $token->delete();
        });
        
        return response()->json(['message' => 'Desconectado'], 200);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'username' => 'required|email|unique:users', 
            'password' => 'required',
        ]);

        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);

        $success['token'] = $user->createToken('MiApp')->accessToken;
        $success['name'] = $user->name;

        return response()->json($success, 200); 
    }

    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json($user, 200); 
    }


    // protected function requestToken(Request $request){
    //     $http = new \GuzzleHttp\Client;
    //     try {
    //         $response = $http->post(config('services.passport.login_endpoint'), [
    //             'form_params' => [
    //                 'grant_type' => 'password',
    //                 'client_id' => config('services.passport.client_id'),
    //                 'client_secret' => config('services.passport.client_secret'),
    //                 'username' => $request->username,
    //                 'password' => $request->password,
    //             ]
    //         ]);
    //         return json_decode((string) $response->getBody(), true);

    //     } catch (\GuzzleHttp\Exception\BadResponseException $e) {
            
    //         if ($e->getCode() === 400) {
    //             return response()->json(['message' => 'Las credenciales son incorrectas. Por favor intente nuevamente'], $e->getCode());
    //         }
    //         return response()->json(['message' => 'Ocurrió un problema con el servidor'], $e->getCode());
    //     }
    // }
}
