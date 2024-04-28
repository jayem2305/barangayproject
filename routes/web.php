<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\ResidentListController;
use App\Http\Controllers\OfficialController;

Route::get('/Admin', [AdminController::class, 'statisticalreport'])->name('admin.statisticalreport');
Route::get('/Admin/resident', [AdminController::class, 'resident'])->name('admin.resident');
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
Route::post('/sendEmailDeclineNotification', [ResidentController::class, 'sendEmailDeclineNotification'])->name('send.declined.notification');
Route::get('/admin/resident/index', [ResidentListController::class, 'index'])->name('admin.residents');
Route::get('/admin/residents', [ResidentListController::class, 'getResidents'])->name('admin.getresident');
Route::post('/save-restriction', [ResidentListController::class, 'store'])->name('save.restriction');
Route::post('/updateStatus', [ResidentListController::class, 'updateStatus'])->name('admin.updatestatus');
Route::post('/getresidentview', [ResidentListController::class, 'getResidentsview'])->name('admin.getResidentsview');
Route::post('/admin/resident', [OfficialController::class, 'addOfficial'])->name('official.add');
Route::get('/admin/contentmanager', [AdminController::class, 'contentmanager'])->name('admin.contentmanager');
Route::get('/admin/resident', [OfficialController::class, 'index'])->name('officials.index');
Route::post('/update-official-status', [OfficialController::class, 'updateStatus'])->name('official.updateStatus');
Route::post('/archiveAll', [OfficialController::class, 'archiveAll'])->name('officials.archiveAll');





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