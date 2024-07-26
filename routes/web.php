<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\HelpController;
use App\Http\Controllers\Admin\ChangeController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/adminAsteria', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// --------------------------------------------------------------------------------------
Route::get('/',[App\Http\Controllers\Asteria\HomeController::class, 'index'])->name('main');
Route::get('/Asteria/download', [App\Http\Controllers\Asteria\FileController::class, 'download'])->name('download');
Route::get('/Asteria/download_launcher', [App\Http\Controllers\Asteria\FileController::class, 'download_launcher'])->name('download_launcher');
Route::get('/Asteria/shop',[App\Http\Controllers\Asteria\HomeController::class, 'shop'])->name('shop');
Route::get('/Asteria/shop/{id}', [App\Http\Controllers\Asteria\HomeController::class, 'shop_show'])->name('shop_show');
Route::get('/Asteria/news',[App\Http\Controllers\Asteria\HomeController::class, 'store'])->name('news');
Route::get('/Asteria/vote',[App\Http\Controllers\Asteria\HomeController::class, 'vote'])->name('vote');
Route::post('/Asteria/vote/check',[App\Http\Controllers\Asteria\HomeController::class, 'vote_check'])->name('vote_check');
Route::get('/Asteria/help',[App\Http\Controllers\Asteria\HomeController::class, 'help'])->name('help');
Route::post('/Asteria/help/check',[App\Http\Controllers\Asteria\HomeController::class, 'help_check'])->name('help_check');
Route::get('/Asteria/changelog',[App\Http\Controllers\Asteria\HomeController::class, 'changelog'])->name('changelog');
Route::get('/Asteria/faq',[App\Http\Controllers\Asteria\HomeController::class, 'show'])->name('faq');
// --------------------------------------------------------------------------------------
Route::get('/Asteria/register',[App\Http\Controllers\Asteria\IncController::class,'index'])->name('asteria_register');
Route::post('/Asteria/register/check',[App\Http\Controllers\Asteria\IncController::class,'review'])->name('asteria_register_check');
Route::get('/Asteria/login',[App\Http\Controllers\Asteria\IncController::class,'show'])->name('asteria_login');
Route::post('/Asteria/login/check',[App\Http\Controllers\Asteria\IncController::class,'store'])->name('asteria_login_check');
// ---------------------------------------------------------------------------------------
Route::middleware(['role:Admin'])->prefix('admin_panel')->group(function(){
    Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('shop', ShopController::class);
    Route::resource('help', HelpController::class);
    Route::resource('change', ChangeController::class);
});
