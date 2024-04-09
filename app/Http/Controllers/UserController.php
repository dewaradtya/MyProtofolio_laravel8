<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use AuthenticatesUsers;

    public function login()
    {
        return view('signIn.login');
    }

    public function doLogin(Request $request)
    {
        $credential = $request->only('email', 'password');

        if (auth()->attempt($credential)){
            return redirect('/post/index'); 
        }else{
            return redirect()->route("signIn/login")->with("error", "Email dan password tidak ditemukan di sistem");
        }
    }

    public function doLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')->with('success', 'Anda telah berhasil logout dari sistem');
    }

    public function register()
    {
        return view('signIn.register');
    }


    public function doRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        auth()->login($user);

        return redirect('/signIn/login')->with('success', 'Registration successful. You can now log in.'); 
    }

}
