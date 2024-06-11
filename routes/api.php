<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

// Registration API 
Route::post("register", [AuthController::class, "register"]);

// Login API 
Route::post("login", [AuthController::class, "login"]);

// Get Profile API
Route::group([
    "middleware" => ["auth:sanctum"]
], function(){

    //Get Profile
    Route::get("profile", [AuthController::class, "profile"]);
    //Logout Profile
    Route::get("logout", [AuthController::class, "logout"]);
});