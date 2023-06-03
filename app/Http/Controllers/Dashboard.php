<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function show()
    {
        return view('halaman.dashboard', [
            'type_menu' => 'dashboard',
        ]);
    }
}
