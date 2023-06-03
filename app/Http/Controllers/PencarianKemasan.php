<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PencarianKemasan extends Controller
{
    public function show()
    {
        return view('halaman.pencarian-kemasan', [
            'type_menu' => 'cari',
        ]);
    }

    public function showhistory()
    {
        return view('halaman.riwayat-kemasan', [
            'type_menu' => 'history',
        ]);
    }
}
