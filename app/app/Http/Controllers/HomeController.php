<?php

use App\Brand_shoe;
use App\Comment;
use App\Follow;
use App\Password_reset;
use App\Photo;
use App\Post;
use App\Star;
use App\Usage;
use App\User;
use Illuminate\Support\Facades\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
