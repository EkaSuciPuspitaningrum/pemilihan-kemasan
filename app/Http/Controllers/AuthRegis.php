<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\CalonPakar;
use App\Models\Pakar;
use App\Models\User;
use Illuminate\Http\Request;

class AuthRegis extends Controller
{
    public function show_regis_user()
    {
        return view('auth-user.registrasi_user', [
            'type_menu' => 'registrasi',
        ]);
    }

    public function user_store()
    {

       $this->validate(request(), [
        'first_name_user' => 'required',
        'last_name_user' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'role' => 'required',

        ]);

        $user = User::create(request(['first_name_user', 'last_name_user', 'role','email', 'password']));

        auth()->login($user);
        return redirect()->to('/dashboard_user');
    }

    public function calon_pakar_store()
    {

       $this->validate(request(), [
        'first_name_pakar' => 'required',
        'last_name_pakar' => 'required',
        'role' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'pend_terakhir' => 'required',
        'nama_instansi' => 'required',

        ]);

        $user = CalonPakar::create(request(['first_name_pakar', 'last_name_pakar', 'role','email', 'password', 'nama_instansi', 'pend_terakhir']));
    
        return redirect("/login")->with('message', 'Akun akan segera diapprove oleh Admin, mohon tunggu sekitar 5 menit.');
    }

    public function show_regis_pakar()
    {
        return view('auth-pakar.registrasi_pakar', [
            'type_menu' => 'registrasi',
        ]);
    }
}

