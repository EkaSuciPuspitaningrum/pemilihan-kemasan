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
        $data = ["kriteria"=>KriteriaProduk::all()];

        return view('user.pencarian-kemasan', $data,[
            'type_menu' => 'pencarian_show',
        ]);
    }

    public function showhistory()
    {
        return view('user.riwayat-kemasan', [
            'type_menu' => 'history',
        ]);
    }

    public function analisa(Request $request)
    {
        if(empty($request->kondisi) || count($request->kondisi) < 2){
            $this->notification('error', 'Kesalahan', 'Harus memasukkan kriteria produk.');
            return redirect(route('/pencarian'));
        }
        $arbobot = [0, 1, 0.75, 0.5, 0.25];
        $argejala = [];
        $arrCfKombine = [];
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
        foreach($kemasans as $kemasan) {
            foreach($kemasan->basis_pengetahuans as $bp) {
                $arrCfKombine[$kemasan->id][] = $bp->cf * $arbobot[$kepastian[$bp->kriteria_id]];
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
        arsort(($cfHasil));
        DataPencarian::create([
            'nama_produk' =>['nama_produk'],
            'berat_produk' => ['berat_produk'],
            'ukuran_produk' => ['ukuran_produk'],
            'volume_produk' => ['volume_produk'],
            'kemasan_id' => array_key_first($cfHasil),
            'presentase' => $cfHasil[array_key_first($cfHasil)]
        ]);

        $bcrum = $this->bcrum('Hasil', route('/pencarian'));
        $kriteri = KriteriaProduk::all();
        return view('user.hasil_pencarian', compact('cfHasil', 'kemasans', 'kepastian', 'kriteria','bcrum'));
    }
    }

