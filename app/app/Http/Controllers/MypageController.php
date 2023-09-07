<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function UserIndex(){
        $email = session()->get('str');
        $name = session()->get('str1');
        return view('mypages.mypage',[
            'email' => $email,
            'name' => $name,
        ]);
    }
    public function UserMain(){
        $email = session()->get('str');
        $name = session()->get('str1');
        return view('main',[
            'email' => $email,
            'name' => $name,
        ]);
    }
}
