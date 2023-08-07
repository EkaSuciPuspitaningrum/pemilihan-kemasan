<?php

namespace App\Http\Controllers;

use App\Models\JenisKemasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KemasanAdmin extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function kemasan_admin()
    {
        $jenis_kemasan = JenisKemasan::all();
        return view('super-admin.pustaka_kemasan', compact('jenis_kemasan'));
    }

    public function kemasan_store_admin(Request $request)
    {

       $kemasan = new JenisKemasan();
       $kemasan->jenis_kemasan = $request->jenis_kemasan;
       $kemasan->keterangan_kemasan = $request->keterangan_kemasan;
       $kemasan->save();
       
       return redirect("/pustaka_kemasan_admin");
    }

    public function kemasan_edit_admin($id){
        $kemasan   = JenisKemasan::whereId($id)->first();
        return view('super-admin.pustaka_kemasan')->with('kemasan', $kemasan);
    }

    public function kemasan_update_admin(Request $request, $id){
        $admin = JenisKemasan::whereId($id)->first();
        $admin->jenis_kemasan = $request->jenis_kemasan;
        $admin->keterangan_kemasan = $request->keterangan_kemasan;
        $admin->save();
    
        return redirect('/pustaka_kemasan_admin')->with('message', 'Data berhasil diedit.');
    }

    public function kemasan_hapus_admin($id)
    {
    DB::table('jenis_kemasan')->where('id',$id)->delete();

    return redirect('/pustaka_kemasan_admin');

    }

}
