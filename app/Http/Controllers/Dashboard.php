<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function show()
    {
        
        return view('user.dashboard', [
            'type_menu' => 'dashboard',
        ]);
    }
}
