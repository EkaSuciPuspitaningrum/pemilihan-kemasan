<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;

class AutAdmin extends Controller
{
    public function show_login_admin()
    {
        return view('auth-super-admin.login', [
            'type_menu' => 'login',
        ]);
    }

    public function actionlogin(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            // Authentication passed, redirect to admin dashboard
            return view('super-admin.dashboard');
        } else {
            // Authentication failed, redirect back to login form with error message
            return back()->with('error','Invalid email and password.');
        }

        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     // Authentication passed, redirect to admin dashboard
        //     return view('super-admin.dashboard');
        // } else {
        //     // Authentication failed, redirect back to login form with error message
        //     return back()->with('error','Invalid email and password.');
        // }

        // if (Auth::user()->role == 'Admin')
        // {
        //     return redirect()->route('dashboard_super.show');  // admin dashboard path
        // } else {
        //     return back()->with('error','Invalid email and password.');  // member dashboard path
        // }


        // $this->validate($request, [
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
        
 
        // if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
        //     $user = auth()->guard('admin')->user();
        //     if($user->id == 1){
        //         return redirect()->route('dashboard_super.show');
        //     }
        // }else {
        //     return back()->with('error','Invalid email and password.');
        // }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
