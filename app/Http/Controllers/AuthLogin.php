<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pakar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthLogin extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function actionlogin(Request $request)
    {
        // dd($request->all());

        $email = $request->email;
        $password = $request->password;
        $data = Admin::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password_hash)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('/dashboard_super');
            }
            else{
                return redirect('login_admin')->with('error', 'Username atau Password salah');
            }
        }
        else{
            return redirect('login_admin')->with('error', 'Username atau Password salah');
        }

    }

    public function login_pakar(Request $request)
    {
        // dd($request->all());

        $email = $request->email;
        $password = $request->password;
        $data = Pakar::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password_hash)){
                Session::put('first_name_pakar',$data->first_name_pakar);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('/dashboard_pakar');
            }
            else{
                return redirect('login')->with('error', 'Username atau Password salah');
            }
        }
        else{
            return redirect('login')->with('error', 'Username atau Password salah');
        }

    }

    public function actionlogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
