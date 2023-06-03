<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangMetode extends Controller
{
    public function show()
    {
        return view('halaman.tentang-metode', [
            'type_menu' => 'cari',
        ]);
    }
}
