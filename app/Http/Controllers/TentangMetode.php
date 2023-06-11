<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangMetode extends Controller
{
    public function user_show()
    {
        return view('user.tentang-metode', [
            'type_menu' => 'tentang',
        ]);
    }

    public function pakar_show()
    {
        return view('pakar.tentang-metode', [
            'type_menu' => 'tentang',
        ]);
    }
}
