<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pakar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;

class AuthAdmin extends Controller
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
        $this->validate($request, [
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
 
        if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
            $user = auth()->guard('admin')->user();
            if($user->is_admin == 1){
                return redirect()->route('/dashboard_super');
            }
        }else {
            return back()->with('error','Whoops! invalid email or password.');
        }

    }
     
    public function pakar_store(Request $request)
    {
       $this->validate(request(), [
        'first_name_pakar' => 'required',
        'last_name_pakar' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'pend_terakhir' => 'required',
        'nama_instansi' => 'required',
        'role' => 'required',

        ]);

        $user = Pakar::create(request(['first_name_pakar', 'last_name_pakar','pend_terakhir','nama_instansi', 'role','email', 'password']));

        auth()->login($user);
        return redirect()->to('/login');
    }
}

