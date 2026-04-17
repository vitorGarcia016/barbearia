<?php

namespace App\Http\Controllers;

use App\Enum\RoleUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function showIndex(){
        return view("index");
    }

    public function showHome(){

        $redirect = "";
        $roleUserLogged = Auth::user()->role->code;

        if($roleUserLogged == RoleUsers::BARBEIRO->value){
            $redirect = "barbeiro";
        } elseif($roleUserLogged == RoleUsers::CLIENTE->value){
            $redirect = "cliente";
        } elseif($roleUserLogged == RoleUsers::ADMIN->value) {
            $redirect = "admin";
        }

        return view("$redirect.home");
    }
}
