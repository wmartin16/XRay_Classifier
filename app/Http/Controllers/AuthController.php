<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('doLogout');
    }

    public function displayLogin()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        $rules = [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if($request['remember'])
        {
            $cookieKey = Auth::getRecallerName();
            Cookie::queue('remember_me', Cookie::get($cookieKey), 1000);
        }

        if(Auth::attempt($credentials, true))
        {
            return redirect('/home');
        }

        return redirect()->back()->withErrors(['credentials' => ['Wrong email or password']]);
    }

    public function doLogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
