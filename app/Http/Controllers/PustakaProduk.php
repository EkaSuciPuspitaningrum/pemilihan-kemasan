<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\KriteriaProduk;

class PustakaProduk extends Controller
{
     public function show()
    {
        $data = ["jenis_produk"=>JenisProduk::all()];
        $kriteria = ["kriteria_produk"=>KriteriaProduk::all()];
        return view('pakar.pustaka_produk', $data, $kriteria,[
            'type_menu' => 'pustaka_produk',
        ]);
    }

    public function store(Request $request)
    {

       $generator = Helper::IDGenerator(new JenisProduk, 'id_produk', 3, 'JPD');
       $produk = new JenisProduk;
       $produk->id_produk = $generator;
       $produk->jenis_produk = $request->jenis_produk;
       $produk->keterangan_produk = $request->keterangan_produk;
       $produk->save();
       
       return redirect("/pustaka_produk");
    }

    public function kriteriaStore(Request $request)
    {

       $generator = Helper::IDGenerator(new KriteriaProduk, 'id_kriteria', 3, 'KPD');
       $produk = new KriteriaProduk;
       $produk->id_kriteria = $generator;
       $produk->kriteria_produk = $request->kriteria_produk;
       $produk->keterangan_kriteria = $request->keterangan_kriteria;
       $produk->save();
       
       return redirect("/pustaka_produk");

    }

    public function kriteria_show(KriteriaProduk $kriteria)
    {
        return view('pakar.pustaka_produk',compact('kriteria'));
    }

    public function produk_show(JenisProduk $produk)
    {
        return view('pakar.pustaka_produk',compact('produk'));
    }


}
