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
        $kriteria = ["kriteria_produk"=>KriteriaProduk::all()];
        return view('pakar.pustaka_produk', $kriteria,[
            'type_menu' => 'pustaka_produk',
        ]);
    }


    public function kriteriaStore(Request $request)
    {

       $generator = Helper::IDGenerator(new KriteriaProduk, 'id_kriteria', 3, 'P');
       $produk = new KriteriaProduk;
       $produk->id_kriteria = $generator;
       $produk->kriteria_produk = $request->kriteria_produk;
       $produk->keterangan_kriteria = $request->keterangan_kriteria;
       $produk->save();
       
       return redirect("/pustaka_produk")->with('message', 'Data berhasil ditambah.');

    }

    public function kriteria_show(KriteriaProduk $kriteria)
    {
        return view('pakar.pustaka_produk',compact('kriteria'));
    }


    public function kriteria_hapus($id)
    {
        DB::table('kriteria_produk')->where('id',$id)->delete();
        
        return redirect('/pustaka_produk')->with('message', 'Data berhasil dihapus.');
        
    }


}
