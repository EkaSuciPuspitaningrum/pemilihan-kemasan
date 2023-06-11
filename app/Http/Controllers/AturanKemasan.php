<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\BasisPengetahuan;
use App\Models\JenisKemasan;
use App\Models\KriteriaProduk;

class AturanKemasan extends Controller
{
    public function show()
    {
        $dataa = ["dataa"=>BasisPengetahuan::all()];
        $kemasan = ["kemasan"=>JenisKemasan::all()];
        $produk = ["produk"=>KriteriaProduk::all()];
        return view('pakar.basis_pengetahuan', $dataa, $kemasan, $produk,[
            'type_menu' => 'aturan',
            // "kemasan" => $kemasan,
            // "produk" => $produk,
            // "dataa" => $dataa,
        ]);
    }

    public function store(Request $request)
    {

       $generator = Helper::IDGenerator(new BasisPengetahuan(), 'id_pengetahuan', 3, 'BPK');
       $pengetahuan = new BasisPengetahuan();
       $pengetahuan->id_pengetahuan = $generator;
       $pengetahuan->jenis_kemasan = $request->jenis_kemasan;
       $pengetahuan->kriteria_produk = $request->kriteria_produk;
       
       $nilai_mb = $request->input('nilai_mb');
       $nilai_md = $request->input('nilai_md');
       
       $nilai_cf = $nilai_mb - $nilai_md;

       $pengetahuan->nilai_mb = $request->nilai_mb;
       $pengetahuan->nilai_md = $request->nilai_md;
       $pengetahuan->nilai_cf = $nilai_cf;

       $pengetahuan->save();
       
       return redirect("/aturan");
    }

}
