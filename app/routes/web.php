<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/',function(){
    return view('main');
});

Route::get('/login','Auth\LoginController@getLogin')->name('user.getlogin');
Route::post('/login', 'Auth\LoginController@login')->name('user.login');
Route::get('/logout','Auth\LoginController@getLogout')->name('user.getlogout');

Route::get('/signup','Auth\RegisterController@showRegistrationForm')->name('user.register_show');
Route::post('/signup', 'Auth\RegisterController@post')->name('user.register_post');
Route::post('/signup_conf','Auth\RegisterController@confirm')->name('user.register_confirm');
Route::get('/signup_comp','Auth\RegisterController@complete')->name('user.register_complete');

Route::get('/pwd_reset','Auth\ResetPasswordController@getReset')->name('passwords.pwd_reset');
Route::prefix('password_reset')->name('password_reset.')->group(function () {
    Route::prefix('email')->name('email.')->group(function () {
        // パスワードリセットメール送信フォームページ
        Route::get('/', [ResetPasswordController::class, 'emailFormResetPassword'])->name('form');
        // メール送信処理
        Route::post('/', [ResetPasswordController::class, 'sendEmailResetPassword'])->name('send');
        // メール送信完了ページ
        Route::get('/send_complete', [ResetPasswordController::class, 'sendComplete'])->name('send_complete');
    });
    // パスワード再設定ページ
    Route::get('/edit', [ResetPasswordController::class, 'edit'])->name('edit');
    // パスワード更新処理
    Route::post('/update', [ResetPasswordController::class, 'update'])->name('update');
    // パスワード更新終了ページ
    Route::get('/edited', [ResetPasswordController::class, 'edited'])->name('edited');
});

?>
