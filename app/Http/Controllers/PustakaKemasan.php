<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\JenisKemasan;
use App\Models\JenisProduk;
use Illuminate\Support\Facades\DB;

class PustakaKemasan extends Controller
{
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
        $generate = JenisKemasan::all()->count();
        if ($generate > 0) {
            $generateId = sprintf("K%03s", ++$generate);
        } else if ($generate == 0) {
            $generateId = "K001";
        }
        return view('pakar.pustaka_kemasan', compact('jenis_kemasan', 'generateId'));
    }

    public function kemasan_edit($id){
        $kemasan   = JenisKemasan::whereId($id)->first();
        return view('pakar.pustaka_kemasan')->with('kemasan', $kemasan);
    }

    public function kemasan_update(Request $request, $id){
        $admin = JenisKemasan::whereId($id)->first();
        $admin->jenis_kemasan = $request->jenis_kemasan;
        $admin->keterangan_kemasan = $request->keterangan_kemasan;
        $admin->save();
    
        return redirect('/pustaka_kemasan')->with('message', 'Data berhasil diedit.');
    }


public function kemasan_hapus($id)
{
    DB::table('jenis_kemasan')->where('id',$id)->delete();
    
    return redirect('/pustaka_kemasan');
    
}

}
