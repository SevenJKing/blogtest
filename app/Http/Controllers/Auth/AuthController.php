<?php

namespace App\Http\Controllers\Auth;

use App\Model\Users;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;//registe
use Illuminate\Support\Facades\Auth;  
use Symfony\Component\Console\Input\Input;
use   Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    use  ThrottlesLogins;
    protected $redirectPath = '/admin';
    protected $redirectAfterLogout = '/auth/login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['loginout']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    function login() {   
        return view('admin.user.login');
    }
    function loginout() { 
        if(Auth::check()){
            Auth::logout();
        }
        return redirect('/auth/login');
    }
    function auth(Request $request) {
        $user=$request->only(['name','password']);
        if(Auth::attempt($user,$request->remember)){ 
              return redirect()->intended('/admin');
        }else{ 
            return redirect('/auth/login')->withErrors(['login failed'])->withInput($request->except('password'));
        }
    }
    public function redirectPath() 
    { 
        return '/admin'; 
    } 
}
