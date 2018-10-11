<?php

namespace Learning\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function form(){
        return view('form_login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if(Auth::validate($credentials)){
            Auth::attempt($credentials);
            return redirect('/produtos');
        }
        else{
            return 'O usuário não existe';
        }
    }

    public function logout(){
        Auth::logout();
	    return redirect('/login');
    }
}
