<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function(){
    Route::view("/","welcome")->name("home");
});

Route::get("/login",[AuthController::class,"login"])
->name("login");
Route::post("/login",[AuthController::class,"loginPost"])
->name("login.post");

Route::get("/register",[AuthController::class,"register"])
->name("register");
Route::post('/register/step1', [AuthController::class, 'step1'])->name('register.step1');
Route::post('/register/step2', [AuthController::class, 'step2'])->name('register.step2');
Route::post('/register/storeMember',  [AuthController::class, 'storeMember'])->name('store.member');
Route::post('/register/laststep', [AuthController::class, 'laststep'])->name('register.laststep');
