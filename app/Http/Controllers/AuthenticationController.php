<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{

    public function showLoginPage()
    {
        return view("login");
    }

    public function loginSubmit(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $roleUserLogged = Auth::user()->role->code;
            $roleBarbeiroCode = 1;
            $roleClienteCode = 2;
            $roleAdminCode = 3;

            $routeRedirect = "";

            if ($roleUserLogged == $roleBarbeiroCode) {
                $routeRedirect = "barbeiro";
            } elseif ($roleUserLogged == $roleClienteCode){
                $routeRedirect = "cliente";
            } elseif ($roleUserLogged == $roleAdminCode) {
                $routeRedirect = "admin";
            }

            return redirect()->to($routeRedirect);
        }

        return back()->withInput()->with("loginError", "Login Inválido!");
    }

    public function showRegisterPage()
    {
        echo "Register";
    }


    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("home");
    }
}
