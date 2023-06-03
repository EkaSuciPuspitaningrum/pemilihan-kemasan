<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdmin extends Controller
{
     public function show()
    {
        return view('admin.dashboard', [
            'type_menu' => 'dashboard_admin',
        ]);
    }
}
