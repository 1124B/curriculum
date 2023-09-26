<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function UserIndex(){
        $nickname = session()->get('str');
        $email = session()->get('str1');
        return view('mypages.mypage',[
            'name' => $nickname,
            'email' => $email,
        ]);
    }
    public function UserMain(){
        $nickname = session()->get('str');
        $email = session()->get('str1');
        return view('main',[
            'name' => $nickname,
            'email' => $email,
        ]);
    }
}
