<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    
    public function showLoginPage(){
        return view("login");
    }

    public function loginSubmit(LoginRequest $request){
        $validation = $request->validated();
    }

    public function showRegisterPage(){
        echo "Register";
    }

}
