<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/',function(){
    return view('main');
});

Route::get('/login',[
    'uses' => 'Auth\LoginController@getLogin',
    'as' => 'auth.login',
]);

Route::get('/signup','Auth\RegisterController@showRegistrationForm')->name('user.register_show');
Route::post('/signup', 'Auth\RegisterController@post')->name('user.register_post');
Route::post('/signup_conf','Auth\RegisterController@confirm')->name('user.register_confirm');
Route::get('/signup_comp','Auth\RegisterController@complete')->name('user.register_complete');

Route::get('/pwd_reset',[
    'uses' => 'Auth\ResetPasswordController@getReset',
    'as' => 'passwords.pwd_reset',
]);
?>
