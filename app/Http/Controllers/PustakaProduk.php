<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\KriteriaProduk;
use Illuminate\Support\Facades\DB;

class PustakaProduk extends Controller
{
     public function show()
    {
        $kriteria_produk = KriteriaProduk::all();
        return view('pakar.pustaka_produk', compact('kriteria_produk'));

    }


    public function kriteriaStore(Request $request)
    {

       $produk = new KriteriaProduk;
       $produk->kriteria_produk = $request->kriteria_produk;
       $produk->keterangan_kriteria = $request->keterangan_kriteria;
       $produk->save();
       
       return redirect("/pustaka_produk")->with('message', 'Data berhasil ditambah.');

    }



    public function kriteria_edit($id){
        $kriteria   = KriteriaProduk::whereId($id)->first();
        return view('pakar.pustaka_produk')->with('kriteria', $kriteria);
    }

    public function kriteria_update(Request $request, $id){
        $admin = KriteriaProduk::whereId($id)->first();
        $admin->kriteria_produk = $request->kriteria_produk;
        $admin->keterangan_kriteria = $request->keterangan_kriteria;
        $admin->save();
    
        return redirect('/pustaka_produk')->with('message', 'Data berhasil diedit.');
    }

    public function kriteria_hapus($id)
    {
        DB::table('kriteria_produk')->where('id',$id)->delete();
        
        return redirect('/pustaka_produk')->with('message', 'Data berhasil dihapus.');
        
    }


}
