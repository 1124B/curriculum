<?php

use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('main');
});
Route::get('/auth.login',function(){
    return view('auth.login');
});
?>