<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSuper extends Controller
{
    public function show()
    {
        return view('super-admin.dashboard', [
            'type_menu' => 'dashboard_super',
        ]);
    }
}
