<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSuper extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function show()
    {
        return view('super-admin.dashboard', [
            'type_menu' => 'dashboard_super',
        ]);
    }
}
