<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PencarianKemasan extends Controller
{
    public function show()
    {
        return view('user.pencarian-kemasan', [
            'type_menu' => 'cari',
        ]);
    }

    public function showhistory()
    {
        return view('user.riwayat-kemasan', [
            'type_menu' => 'history',
        ]);
    }
}
