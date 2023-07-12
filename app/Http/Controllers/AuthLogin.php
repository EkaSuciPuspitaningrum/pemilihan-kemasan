<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthLogin extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function actionlogin(Request $request)
    {
        // dd($request->all());

        $credential = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);


        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/dashboard_super');

        }

        return back()->with('error','Invalid email or password.');

    }

    public function actionlogout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/');
    }
}
