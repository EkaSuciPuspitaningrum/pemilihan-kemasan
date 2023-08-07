<?php

namespace App\Http\Controllers;

use App\Models\KriteriaProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukAdmin extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function produk_admin()
    {
        $kriteria_produk = KriteriaProduk::all();
        return view('super-admin.pustaka_produk', compact('kriteria_produk'));

    }

    public function kriteriaadminStore(Request $request)
    {

       $produk = new KriteriaProduk;
       $produk->kriteria_produk = $request->kriteria_produk;
       $produk->save();
       
       return redirect("/pustaka_produk_admin")->with('message', 'Data berhasil ditambah.');

    }

    public function kriteria_edit_admin($id){
        $kriteria   = KriteriaProduk::whereId($id)->first();
        return view('super-admin.pustaka_produk')->with('kriteria', $kriteria);
    }

    public function kriteria_update_admin(Request $request, $id){
        $admin = KriteriaProduk::whereId($id)->first();
        $admin->kriteria_produk = $request->kriteria_produk;
        $admin->save();
    
        return redirect('/pustaka_produk_admin')->with('message', 'Data berhasil diedit.');
    }

    public function kriteria_hapus_admin($id)
    {
        DB::table('kriteria_produk')->where('id',$id)->delete();
        
        return redirect('/pustaka_produk_admin')->with('message', 'Data berhasil dihapus.');
        
    }
}
