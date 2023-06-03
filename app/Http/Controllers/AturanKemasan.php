<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AturanKemasan extends Controller
{
    public function show()
    {
        return view('admin.aturan-kemasan', [
            'type_menu' => 'aturan',
        ]);
    }
}
