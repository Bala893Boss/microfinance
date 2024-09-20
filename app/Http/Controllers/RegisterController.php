<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function signupForm(){

        return view('signup.register');
    }

    public function store(Request $request){

        $request->validate(['username'=>'required','email'=>'required','password'=>'required']);

        $user = new User;
        $user->name = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        
        $user->save();

        Auth::login($user);

        return redirect('/')->with('success','User has been created successfully.');
    }
}
