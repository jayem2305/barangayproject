<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\AdminController;

Route::get('/Admin', [AdminController::class, 'statisticalreport'])->name('admin.statisticalreport');

Route::get('/Admin/forum', [AdminController::class, 'forum'])->name('Admin.forum');
Route::post('/Admin/forum',  [AdminController::class, 'forumpost'])->name('Admin.forumpost');
Route::get('/admin/forum/data', [AdminController::class, 'getForumData'])->name('admin.forum.data');
Route::post('/admin/forum/{forum}',[AdminController::class,'store'])->name('forums.comments.store');

//Route::middleware("auth")->group(function(){
Route::view('/userresident/index', 'userresident.index')->name('userresident.index');

//});

Route::middleware([RedirectIfAuthenticated::class])->group(function () {
Route::get('/',[AuthController::class,"index"])->name('home');
Route::get("/onlineservices",[AuthController::class,"onlineservices"])->name("onlineservices");
Route::get("/aboutus",[AuthController::class,"aboutus"])->name("aboutus");
Route::get("/login",[AuthController::class,"login"])->name("login");
Route::post("/login",[AuthController::class,"loginPost"])->name("login.post");
Route::get("/register",[AuthController::class,"register"])
->name("register");
Route::post('/register/step1', [AuthController::class, 'step1'])->name('register.step1');
Route::post('/register/step2', [AuthController::class, 'step2'])->name('register.step2');
//Route::post('/register/storeMember',  [AuthController::class, 'storeMember'])->name('store.member');
Route::post('/register/laststep', [AuthController::class, 'laststep'])->name('register.laststep');
});