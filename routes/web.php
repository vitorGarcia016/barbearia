<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Routes from home 
Route::get("/", [HomeController::class, "showHome"])->name("home");
