<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->get();
        
        if(count($user) === 0){
            
            return view('login',['login_error' => '1']);
        }
        if(Hash::check($request->password , $user[0]->password)){
        
            session(['nickname' => $user[0]->nickname]);
            session(['email' => $user[0]->email]);
            
            session()->flash('flash_flg',1);
            session()->flash('flash_msg','ログインしました。');
            
            session()->put('str', $user[0]->nickname);
            session()->put('str1', $user[0]->email);
            return view('main', [
                "nickname" => $user[0]->nickname,
                "email" => $user[0]->email,
                ]);
        }else{
            return view('auth.login',['login_error' => '1']);
        }        
    }

    public function getLogout(Request $request)
    {
        $request->session()->flush();
        return redirect(url('/'));
    }

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
}