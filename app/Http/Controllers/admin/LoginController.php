<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function form_submit(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'pwd' => ['required', 'string'],
        ],
        [
           'pwd.required' => 'The password field is required.',
           'pwd.string' => 'Wrong type of Password.',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->pwd,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin')->with('success', 'Logged in successfully');
        }

        return back()->withErrors([
            'credentialWronng' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
