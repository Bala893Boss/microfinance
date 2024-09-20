<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //

    public function viewLoginform(){

        return view('login.login');
    }

    public function authenticate(Request $request){

        $request->validate(['email'=>'required','password'=>'required']);

        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user = User::where('email',$email)->first();
            Auth::login($user);
            return redirect('dashboard');
        }else{
            return back()->withErrors('Invalid credentials');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    
}
