<?php

namespace App\Http\Controllers;

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
        //kriteria harus dilih
        if(empty($request->kondisi) || count($request->kondisi) < 2){
            return redirect("/pencarian")->with('message', 'Harus memasukkan minimal 3 kriteria produk.');

        }

        //pembobotan oleh user, dengan memilih kriteria yang telah disediakan
        $arbobot = [1, 0.75, 0.5, 0.25, 0];
        $argejala = [];
        $arrCfKombine = [];

        //explode() sebagai pemisah atau pemecah string
        for ($i = 0; $i < count($request->kondisi); $i++) {
            $arkondisi = explode("_", $request->kondisi[$i]);
            $kondisi[] = ['kriteria_id' => $arkondisi[0]];
            $kepastian[$arkondisi[0]] = $arkondisi[1];
            if (strlen($request->kondisi[$i]) > 1) {
                $argejala += [$arkondisi[0] => $arkondisi[1]];
                $kemasans = JenisKemasan::with(['basis_pengetahuans' => function ($result) use ($kepastian) {
                    $result->with('kriteria')->whereIn('kriteria_id', array_keys($kepastian));
                }])->groupBy('id')->orderBy('id')->get();
            }
        }

        // dd(array_keys($kepastian));

        //perhitungan certainty factor
        foreach($kemasans as $kemas) {
            foreach($kemas->basis_pengetahuans as $bp) {
                $arrCfKombine[$kemas->id][] = $bp->cf * $arbobot[$kepastian[$bp->kriteria_id]];
            }
            foreach($arrCfKombine as $key => $cfKombine){
                $cfBaru = 0;
                $jumlahCf = count($cfKombine);
                foreach($cfKombine as $key2 => $cf){
                    if(++$key2 == $jumlahCf){
                        $cfLama = $cfBaru;
                        $cfBaru = $cfLama + $cf * (1 - $cfLama);
                        $cfTotal = $cfBaru;
                    }elseif($key2 >= 1){
                        $cfLama = $cfBaru;
                        $cfBaru = $cfLama + $cf * (1 - $cfLama);
                    }else{
                        $cfBaru = $cf[0];
                    }
                }
                $cfHasil[$key] = $cfTotal;
            }
        }

        //arsort() digunakan untuk untuk mengurutkan elemen-elemen dari sebuah array 
        //asosiatif secara ascending (menaik) berdasarkan nilainya.
        arsort(($cfHasil));

        //data akan disimpan di tabel data pencarian yang selanjutnya
        //akan ditampilkan di halaman riwayat
        DataPencarian::create([
            $berat_produk1 = $request->berat_produk1,
            $berat_produk2 = $request->berat_produk2,

            'nama_produk' =>$request->nama_produk,
            'berat_produk' =>$berat_produk1 . " " . $berat_produk2,
            'ukuran_produk' =>$request->ukuran_produk,
            'volume_produk' =>$request->volume_produk,
            'jenis_kemasan_id' => array_key_first($cfHasil),
            // 'persen' => ($cfHasil[array_key_first($cfHasil)]),
        ]);

        $kriteria = KriteriaProduk::all();
        return view('user.hasil_pencarian', compact('cfHasil', 'kemasans', 'kepastian', 'kriteria'));
    }
}

