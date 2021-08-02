<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request['password'] = Hash::make($request->password);
        $user =  User::create($request->all());
        return $user->createToken('user')->plainTextToken;
    }

    public function login(Request $request)
    {
        // $user = User::where('email' , $request->email)->first();
        // $password = Hash::check($request->password, $user->password);
        // if ($password) {
        //     return "Yes";
        // }else{
        //     return "No";
        // }

        // Auth::attempt(['email' => $request->email, 'password' => $request->password]

       if (Auth::attempt($request->all())) {
          return $request->user()->createToken("name")->plainTextToken;
       }else{
           return "Not Vaild!";
       }
    }
}
