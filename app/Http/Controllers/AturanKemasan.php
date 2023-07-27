<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\BasisPengetahuan;
use App\Models\JenisKemasan;
use App\Models\KriteriaProduk;
use Illuminate\Support\Facades\DB;

class AturanKemasan extends Controller
{
    public function show()
    {
        $data = BasisPengetahuan::all();
        $kriteria = KriteriaProduk::all();
        $kemasan = JenisKemasan::all();

        return view('pakar.basis_pengetahuan', compact(['data', 'kriteria', 'kemasan']),[
            'type_menu' => 'aturan',
        ]);
    }

    public function store(Request $request)
    {

       $pengetahuan = new BasisPengetahuan();
       $pengetahuan->jenis_kemasan_id = $request->jenis_kemasan_id;
       $pengetahuan->kriteria_id = $request->kriteria_id;
       $pengetahuan->cf = $request->cf;

       $pengetahuan->save();
       
       return redirect("/aturan");
    }

    public function pengetahuan_edit($id){
        $data   = BasisPengetahuan::whereId($id)->first();
        return view('pakar.basis_pengetahuan')->with('data', $data);
    }

    public function pengetahuan_update(Request $request, $id){
        $admin = BasisPengetahuan::whereId($id)->first();
        $admin->jenis_kemasan_id = $request->jenis_kemasan_id;
        $admin->kriteria_id = $request->kriteria_id;
        $admin->cf = $request->cf;
        $admin->save();
    
        return redirect('/aturan')->with('message', 'Data berhasil diedit.');
    }

    public function pengetahuan_hapus($id)
{
    DB::table('pengetahuan')->where('id',$id)->delete();
    
    return redirect('/aturan')->with('message', 'Data berhasil dihapus.');
    
}

}
