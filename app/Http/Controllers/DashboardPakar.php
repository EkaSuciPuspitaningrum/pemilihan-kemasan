<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPakar extends Controller
{
    public function __construct()
    {
        $this->middleware('expert');
    }

     public function show()
    {
        return view('pakar.dashboard', [
            'type_menu' => 'dashboard_pakar',
        ]);
    }

    public function pakar_show()
    {
        return view('pakar.tentang-metode', [
            'type_menu' => 'tentang',
        ]);
    }
}
