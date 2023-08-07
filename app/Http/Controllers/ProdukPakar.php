<?php

namespace App\Http\Controllers;

use App\Models\KriteriaProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukPakar extends Controller
{
    public function __construct()
    {
        $this->middleware('expert');
    }

    public function show()
    {
        $kriteria_produk = KriteriaProduk::all();
        return view('pakar.pustaka_produk', compact('kriteria_produk'));

    }

    public function kriteriaStore(Request $request)
    {

       $produk = new KriteriaProduk;
       $produk->kriteria_produk = $request->kriteria_produk;
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
        $admin->save();
    
        return redirect('/pustaka_produk')->with('message', 'Data berhasil diedit.');
    }

    public function kriteria_hapus($id)
    {
        DB::table('kriteria_produk')->where('id',$id)->delete();
        
        return redirect('/pustaka_produk')->with('message', 'Data berhasil dihapus.');
        
    }
}
