<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Raw;

//Route from home 
Route::get("/home", [HomeController::class, "showHome"])->name("home");


//Route from authentication
Route::controller(AuthenticationController::class)->group(function(){

    Route::get("login", "showLoginPage")->name("login");
    Route::post("login-submit", "loginSubmit")->name("loginSubmit");
    Route::get("register", "showRegisterPage")->name("register");
});
