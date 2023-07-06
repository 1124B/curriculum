<?php

use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('owners.post_list');
});
?>