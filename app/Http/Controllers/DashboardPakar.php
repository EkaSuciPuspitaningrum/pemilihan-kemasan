<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPakar extends Controller
{
     public function show()
    {
        return view('pakar.dashboard', [
            'type_menu' => 'dashboard_pakar',
        ]);
    }
}
