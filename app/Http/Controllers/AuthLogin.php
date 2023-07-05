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

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            $email = $request-> input('email');
            $admin = Admin::where('email', $email)->first();
            session()->put('name', $admin->name);
            session()->put('role', $admin->role);
            session()->put('id', $admin->id);
            if($admin->role == "Admin"){
                return view('super-admin.dashboard');
            }
        } else {
            // Authentication failed, redirect back to login form with error message
            return back()->with('error','Invalid email and password.');
        }

    }

    public function actionlogout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/');
    }
}
