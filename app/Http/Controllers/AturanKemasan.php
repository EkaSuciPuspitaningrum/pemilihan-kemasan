<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AturanKemasan extends Controller
{
    public function show()
    {
        return view('pakar.tentang-metode', [
            'type_menu' => 'aturan',
        ]);
    }
}
