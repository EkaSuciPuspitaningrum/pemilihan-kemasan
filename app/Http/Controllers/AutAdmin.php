<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutAdmin extends Controller
{
    public function show_login_admin()
    {
        return view('auth-super-admin.login', [
            'type_menu' => 'login',
        ]);
    }
}
