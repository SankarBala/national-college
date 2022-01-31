<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(){
        // $this->middleware('auth')->except(['loginView', 'login']);
        // $this->middleware('guest')->only(['loginView', 'login']);
    }


    public function loginView(){
        return view('auth.login');
    }

    public function login(){
        return "login";
    }

    public function logout(Request $request){
        return $request->all();
    }

}
