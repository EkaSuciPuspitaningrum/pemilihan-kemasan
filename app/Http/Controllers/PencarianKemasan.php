<?php

namespace App\Http\Controllers;

use App\Models\BasisPengetahuan;
use App\Models\DataPencarian;
use App\Models\DataRiwayat;
use App\Models\JenisKemasan;
use App\Models\KriteriaProduk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PencarianKemasan extends Controller
{
    
    public function pencarian_show()
    {

        $kriteria = KriteriaProduk::all();
        return view('user.pencarian-kemasan', compact('kriteria'));

    }

    public function showhistory()
    {
        $riwayat = DataPencarian::latest()->get();
        return view('user.riwayat-kemasan', compact('riwayat'));

    }

    public function analisa(Request $request)
{
    $selectedCriteria = $request->input('criteria');

    if (count($selectedCriteria) < 10) {
        return redirect()->back()->with('error', 'Pilih minimal 10 kriteria.');
    }

    $this->validate($request, [
        'criteria' => 'required|array|min:10',
    ]);

    $selectedRules = [];

    // Dapatkan aturan berdasarkan kriteria yang dipilih
    foreach ($selectedCriteria as $criteriaId) {
        $rule = BasisPengetahuan::where('kriteria_id', $criteriaId)->get();
        if ($rule->count() > 0) {
            $selectedRules[$criteriaId] = $rule;
        }
    }

    $jenisKemasanCF = [];

    // Hitung kombinasi CF berdasarkan aturan-aturan yang dipilih
    foreach ($selectedRules as $criteriaId => $rules) {
        foreach ($rules as $rule) {
            $jenisId = $rule->jenis_kemasan_id;
            $cf = $rule->cf;

            if (!isset($jenisKemasanCF[$jenisId])) {
                $jenisKemasanCF[$jenisId] = $cf;
            } else {
                $jenisKemasanCF[$jenisId] += $cf; // Operasi OR
            }
        }
    }

    // Mendapatkan jenis kemasan dengan nilai CF tertinggi
    $selectedJenisKemasan = null;
    $selectedCFValue = 0;

    foreach ($jenisKemasanCF as $jenisKemasanId => $cfValue) {
        if ($cfValue > $selectedCFValue) {
            $selectedCFValue = $cfValue;
            $selectedJenisKemasan = JenisKemasan::find($jenisKemasanId);
        }
    }

    // Retrieve jenis kemasan data
    $jenisKemasans = JenisKemasan::whereIn('id', array_keys($jenisKemasanCF))->get();

    $berat_produk1 = $request->berat_produk1;
    $berat_produk2 = $request->berat_produk2;

    $dataPencarian = new DataPencarian();
    $dataPencarian->nama_produk = $request->nama_produk;
    $dataPencarian->berat_produk = $berat_produk1 . " " . $berat_produk2;
    $dataPencarian->ukuran_produk = $request->ukuran_produk;
    $dataPencarian->volume_produk = $request->volume_produk;
    $dataPencarian->jenis_kemasan_id = $selectedJenisKemasan->id;
    $dataPencarian->save();

    return view('user.hasil_pencarian', [
        'jenisKemasanCF' => $jenisKemasanCF,
        'jenisKemasans' => $jenisKemasans,
        'selectedJenisKemasan' => $selectedJenisKemasan,
        'selectedCFValue' => $selectedCFValue,
        'selectedCriteria' => KriteriaProduk::whereIn('id', $selectedCriteria)->get(), 
    ]);
}
}

