<?php

namespace App\Http\Controllers;

use App\Models\JenisKemasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KemasanPakar extends Controller
{
    public function __construct()
    {
        $this->middleware('expert');
    }
    
    public function show()
    {
        $jenis_kemasan = JenisKemasan::all();
        return view('pakar.pustaka_kemasan', compact('jenis_kemasan'));
    }

   
    public function store(Request $request)
    {

       $kemasan = new JenisKemasan();
       $kemasan->jenis_kemasan = $request->jenis_kemasan;
       $kemasan->keterangan_kemasan = $request->keterangan_kemasan;
       $kemasan->save();
       
       return redirect("/pustaka_kemasan");
    }


    public function kemasan_show(JenisKemasan $kemasan)
    {
        $jenis_kemasan = JenisKemasan::all();

        return view('pakar.pustaka_kemasan', compact('jenis_kemasan'));
    }

    public function kemasan_edit($id){
        $kemasan   = JenisKemasan::whereId($id)->first();
        return view('pakar.pustaka_kemasan')->with('kemasan', $kemasan);
    }



public function kemasan_hapus($id)
{
    DB::table('jenis_kemasan')->where('id',$id)->delete();
    
    return redirect('/pustaka_kemasan');
    
}

public function kemasan_update(Request $request, $id){
    $admin = JenisKemasan::whereId($id)->first();
    $admin->jenis_kemasan = $request->jenis_kemasan;
    $admin->keterangan_kemasan = $request->keterangan_kemasan;
    $admin->save();

    return redirect('/pustaka_kemasan')->with('message', 'Data berhasil diedit.');
}
}
