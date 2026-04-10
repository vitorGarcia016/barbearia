<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckUserLogged;
use Illuminate\Support\Facades\Route;


//Route from home 
Route::get("/", [HomeController::class, "showHome"])->name("home");


//Route from authentication
Route::controller(AuthenticationController::class)->group(function(){

    Route::middleware([CheckUserLogged::class])->group(function(){
        Route::get("login", "showLoginPage")->name("login");
        Route::post("login-submit", "loginSubmit")->name("loginSubmit");
        Route::get("register", "showRegisterPage")->name("register");
        Route::post("register-submit", "registerSubmit")->name("registerSubmit");
    });

    Route::get("logout", "logout")->name("logout");
});


//Routes for authenticated users
Route::middleware(["auth"])->group(function(){
    Route::get("barbeiro", function(){
        echo "barbeiro";
    })->name("barbeiro");

    Route::get("cliente", function(){
        echo "cliente";
    })->name("cliente");

    Route::get("admin", function(){
        echo "admin";
    })->name("admin");

});

