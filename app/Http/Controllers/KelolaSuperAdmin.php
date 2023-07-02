<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\CalonPakar;
use App\Models\Pakar;
use App\Models\User;
use Illuminate\Http\Request;

class KelolaSuperAdmin extends Controller
{
    public function appr_pakar()
    {
        $data = ["calon_pakar"=>CalonPakar::all()];
        return view('super-admin.appr_pakar', $data,[
            'type_menu' => 'appr_pakar',
        ]);
    }
    public function data_pakar()
    {
        $dataPakar = ["pakar"=>Pakar::all()];
        return view('super-admin.data_pakar', $dataPakar,[
            'type_menu' => 'data_pakar',
        ]);
    }
    public function data_pengguna()
    {
        $dataUser = ["data_user"=>User::all()];
        return view('super-admin.data_pengguna', $dataUser,[
            'type_menu' => 'data_pengguna',
        ]);
    }
    public function data_admin()
    {
        $dataAdmin = ["data_admin"=>Admin::all()];
        return view('super-admin.data_admin', $dataAdmin,[
            'type_menu' => 'data_admin',
        ]);
    }
}
