<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResidentController;

Route::get('/Admin', [AdminController::class, 'statisticalreport'])->name('admin.statisticalreport');
Route::get('/Admin/pendingaccount', [AdminController::class, 'pendingaccount'])->name('admin.pendingaccount');
Route::get('/Admin/forum', [AdminController::class, 'forum'])->name('Admin.forum');
Route::post('/Admin/forum',  [AdminController::class, 'forumpost'])->name('Admin.forumpost');
Route::get('/admin/forum/data', [AdminController::class, 'getForumData'])->name('admin.forum.data');
Route::post('/Admin/store',[AdminController::class,'store'])->name('admin.forum.store');
Route::get('/comments/{comment}', [AdminController::class, 'fetchComments']);
Route::post('/Admin/savereply', [AdminController::class, 'saveReply'])->name('admin.saveReply.store');
Route::get('/reply/{reply}', [AdminController::class, 'fetchreplies']);
Route::post('/forums/{id}/archive',  [AdminController::class, 'archiveForum'])->name('forums.archive');
Route::get('/forums/statuses', [AdminController::class, 'getForumStatuses'])->name('forums.statuses');
Route::post('/forums/{id}/restore', [AdminController::class, 'restore'])->name('forums.restore');
Route::get('/pendingaccount', [ResidentController:: class, 'pendingaccount'])->name('residents.pendingaccount');
Route::get('/accountview', [ResidentController:: class, 'accountview'])->name('residents.accountview');
Route::post('/sendEmailNotification', [ResidentController::class, 'sendEmailNotification'])->name('send.email.notification');




//Route::get('/admin/forum/{id}/comments', [AdminController::class, 'getCommentsForForum'])->name('admin.forum.comments');
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