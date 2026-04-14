<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckUserLogged;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;


//Route from home 
Route::get("/", [HomeController::class, "showIndex"])->name("index");


//Route from authentication
Route::controller(AuthenticationController::class)->group(function () {

    Route::middleware([CheckUserLogged::class])->group(function () {

        //Authentication
        Route::get("login", "showLoginPage")->name("login");
        Route::post("login-submit", "loginSubmit")->name("loginSubmit");
        Route::get("register", "showRegisterPage")->name("register");
        Route::post("register-submit", "registerSubmit")->name("registerSubmit");
    });

    Route::get("logout", "logout")->name("logout");
});


//Email verification
Route::get("/email/verify", function () {
    return view("auth.verify-email");
})->name("verification.notice");

Route::get("/email/verify/{id}/{hash}", function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect("/home");
})->middleware(["auth","signed"])->name("verification.verify");



//Routes for authenticated users
Route::middleware(["auth", "verified"])->group(function () {
    Route::get("home", function(){
        echo "home";
    })->name("home");
});
