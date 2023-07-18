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

       $generator = Helper::IDGenerator(new BasisPengetahuan(), 'id_pengetahuan', 3, 'BPK');
       $pengetahuan = new BasisPengetahuan();
       $pengetahuan->id_pengetahuan = $generator;
       $pengetahuan->jenis_kemasan = $request->jenis_kemasan;
       $pengetahuan->kriteria_produk = $request->kriteria_produk;
       $pengetahuan->nilai_cf = $request->nilai_cf;

       $pengetahuan->save();
       
       return redirect("/aturan");
    }

    public function pengetahuan_edit($id){
        $data   = BasisPengetahuan::whereId($id)->first();
        return view('pakar.basis_pengetahuan')->with('data', $data);
    }

    public function pengetahuan_update(Request $request, $id){
        $admin = BasisPengetahuan::whereId($id)->first();
        $admin->jenis_kemasan = $request->jenis_kemasan;
        $admin->kriteria_produk = $request->kriteria_produk;
        $admin->nilai_cf = $request->nilai_cf;
        $admin->save();
    
        return redirect('/aturan')->with('message', 'Data berhasil diedit.');
    }

    public function pengetahuan_hapus($id)
{
    DB::table('pengetahuan')->where('id',$id)->delete();
    
    return redirect('/aturan')->with('message', 'Data berhasil dihapus.');
    
}

}
