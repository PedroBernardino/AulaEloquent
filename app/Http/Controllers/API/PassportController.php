<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PassportController extends Controller
{
    //
    public $successStatus = 200;
    public function login(){
        if (Auth::attempt(['email' => request('email'), 'password' =>request('password')])){
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')-> accessToken;
            $success['user'] = $user;
            return response()->json(['success' => $success], $this->successStatus);
        }
        else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function register(Request $request) {
        $newUser = new User;
        $this->validate($request, [
            'email' => 'required|email|unique:users',],
            ['email.unique' => 'Esse email já foi cadastrado']
        );
        /*if ($this->fails()) {
            return response()->json(['ola']); 

        };*/
        $newUser->name = $request->name;
        $newUser->age = $request->age;
        $newUser->status = $request->status; 
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password);
        $newUser->save();
        $success['token'] = $newUser->createToken('MyApp')->accessToken;
        $success['user'] = $newUser;
        return response() -> json(['success' => $success], $this->successStatus);
    }

    public function getDetails() {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus); 
    }

    public function logout(){
        $accessToken = Auth::user()->token();
        DB::table('oauth_refresh_tokens')->where('access_token_id',
        $accessToken->id)->update(['revoked' => true]);
        $accessToken->revoke();
        return response()->json( null, 204);
    }
}
