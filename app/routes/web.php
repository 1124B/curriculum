<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;

Route::get('/',function(){
    return view('main');
});

Route::get('/login',[
    'uses' => 'Auth\LoginController@getLogin',
    'as' => 'auth.login',
]);

Route::group(['prefix' => 'user'], function(){
    Route::get('/signup',[
        'uses' => 'Auth\RegisterController@getSignup',
        'as' => 'logins.signup',
    ]);
    Route::get('/signup_conf', 'Auth\RegisterController@postSignconf');
    Route::post('/signup_conf',[
        'uses' => 'Auth\RegisterController@postSignconf',
        'as' => 'logins.signup_conf',
    ]);
    Route::get('/signup_comp', 'Auth\RegisterController@postSigncomp');
    Route::post('/signup_comp',[
        'uses' => 'Auth\RegisterController@postSigncomp',
        'as' => 'logins.signup_comp',
    ]);
});

Route::get('/pwd_reset',[
    'uses' => 'Auth\ResetPasswordController@getReset',
    'as' => 'passwords.pwd_reset',
]);
?>
