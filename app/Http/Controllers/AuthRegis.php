<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthRegis extends Controller
{
    public function show_regis_user()
    {
        return view('auth-user.registrasi_user', [
            'type_menu' => 'registrasi',
        ]);
    }

    public function show_regis_pakar()
    {
        return view('auth-pakar.registrasi_pakar', [
            'type_menu' => 'registrasi',
        ]);
    }
}

