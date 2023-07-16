<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    private $form_show = 'Auth\RegisterController@showRegistrationForm';
    private $form_confirm = 'Auth\RegisterController@confirm';
    private $form_complete = 'Auth\RegisterController@complete';

    private $formItems = ["id", "name", "email", "password"];

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id' => ['required','string','min:4','unique:users'],
            'name' => ['required','string','min:4','unique:users'],
            'email' => ['required','string','email','unique:users'],
            'password' => ['required','string','min:4'],
        ]);
    }
    protected function create(array $data)
    {
        return User::create([
            'id' => $data['id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    function post(Request $request)
    {
        $this->validator($request->all())->validate();
        $input = $request->only($this->formItems);
        $request->session()->only($this->formItems);
        return redirect()->action($this->form_confirm);
    }
    public function register(Request $request)
    {
        $input = $request->session()->get("form_input");
        if($request->has("back")){
            return redirect()->action($this->form_show)->withInput($input);
        }
        if(!$input){
            return redirect()->action($this->form_show);
        }
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        $request->session()->forget("form_input");
    }
    function registered(Request $request, $user)
    {
        return redirect()->action($this->form_complete);
    }
    public function showRegistrationForm()
    {
        return view('logins.signup');
    }
    public function confirm(Request $request)
    {
        $input = $request->session()->get("form_input");
        if(!$input){
            return redirect()->action("Auth\RegisterController");
        }
        return view('logins.signup_conf', ["input" => $input]);
    }
    public function complete()
    {
        return view('logins.signup_comp');
    }
    
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    // /**
    //  * Where to redirect users after registration.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = RouteServiceProvider::HOME;

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    // /**
    //  * Get a validator for an incoming registration request.
    //  *
    //  * @param  array  $data
    //  * @return \Illuminate\Contracts\Validation\Validator
    //  */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\User
    //  */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
}
