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

    public function hasilpencarian(Request $request)
    {
        $validateReq = $request->validate([
            'namaproduk' => 'required',
            'beratproduk' => 'required',
            'ukuranproduk' => 'required',
            'volumeproduk' => 'required'

        ]);

        $services = $request->input('choiceRadio');

        if ($services == null) {
            return redirect('/pencarian')->with('error', 'Anda Belum Mengisikan Data');
        } else {
            $dataKemasan = JenisKemasan::all();
            $dataAturan = new BasisPengetahuan();

            foreach ($dataKemasan as $kemasan) {
                $dataResult[$kemasan->jenis_kemasan] = "";
                $fetchData[$kemasan->jenis_kemasan] = $dataAturan
                    ->where('jenis_kemasan', $kemasan->jenis_kemasan)
                    ->select('kriteria_produk')
                    ->get()
                    ->toArray();

                $daftarKriteria[$kemasan->jenis_kemasan] = [];
                foreach ($fetchData[$kemasan->jenis_kemasan] as $dataKriteria) {
                    array_push($daftarKriteria[$kemasan->jenis_kemasan], $dataKriteria['kriteria_produk']);
                }

                $resultProcess[$kemasan->jenis_kemasan] = array_intersect($daftarKriteria[$kemasan->jenis_kemasan], $services);
            }

            // Menentukan Nilai CF
            foreach ($resultProcess as $key => $value) {
                if (count($resultProcess[$key]) > 0) {
                     foreach ($value as $a => $b) {
                    $fetchData[$key][$a] = $dataAturan
                        ->where('jenis_kemasan', $key)
                        ->where('kriteria_produk', $b)
                        ->select('nilai_CF')
                        ->first();
                    $dataHasilFetchCF[$key][$a] = $fetchData[$key][$a]->nilai_CF;
                }
                $fixIndexes[$key] = array_values($dataHasilFetchCF[$key]);
                }
            }

            foreach ($fixIndexes as $kunci => $harga) {
                $hasilPerhitunganDataCF[$kunci] = round($this->persentaseCF($kunci, $harga), 3);
            }

            // Menyimpan Data Pengguna
            $savedDataPengguna = [
                'kode_user' => 'P' . date('YmdHis'),
                'nama_produk' => $validateReq['namaproduk'],
                'berat_produk' => $validateReq['beratproduk'],
                'ukuran_produk' => $validateReq['ukuranproduk'],
                'volume_produk' => $validateReq['volumeproduk']

            ];
            $dataPenggunaInsert = DataPencarian::insertGetId($savedDataPengguna);

            // Menyimpan Data Riwayat
            $dataFetchKemasan = JenisKemasan::where('jenis_kemasan',  array_search(max($hasilPerhitunganDataCF), $hasilPerhitunganDataCF))
                ->get()
                ->toArray();
            $jsonjenis_kemasan = [
                'JenisKemasan' => array_search(max($hasilPerhitunganDataCF), $hasilPerhitunganDataCF),
                'Persentase' => max($hasilPerhitunganDataCF) * 100,
                'Probabilitas' => max($hasilPerhitunganDataCF)
            ];
            $savedDataRiwayat = [
                'id_user' => $dataPenggunaInsert,
                'tanggal' => Carbon::now(),
                'kriteria' => json_encode($services),
                'jenis_kemasan' => json_encode($jsonjenis_kemasan),
                'keterangan_kemasan' => $dataFetchKemasan[0]['keterangan_kemasan']
            ];

            DataRiwayat::create($savedDataRiwayat);

            return redirect('/pencarian' . '/' . Crypt::encryptString($savedDataPengguna['kode_user']))->with([
                'success' => 'Data Berhasil Disimpan!',
                'message' => 'Nomor pencarian anda adalah ',
                'kodeuser' => $savedDataPengguna['kode_user']
            ]);
        }
    }
        public function persentaseCF(String $NamaAttributes, $datArray, int $index = 0, $dataacuan = null)
    {
        $arrStartPoint = $datArray;

        if ($dataacuan == null) {
            $dataacuan = $arrStartPoint[$index];
        }

        if (!isset($arrStartPoint[$index + 1])) {
            $arrStartPoint[$index + 1] = 0;
        }

        $dataCF[$index] = $dataacuan + $arrStartPoint[$index + 1] * (1 - $dataacuan);

        if ($dataacuan == null) {
            unset($arrStartPoint[$index]);
            unset($arrStartPoint[$index + 1]);
        } else {
            unset($arrStartPoint[$index]);
        }

        if (count($arrStartPoint) > 1) {
            return $this->persentaseCF($NamaAttributes, $arrStartPoint, $index + 1, $dataCF[$index]);
        }

        if (count($arrStartPoint) > 1) {
            return $dataCF[$index];
        } else {
            return $dataCF[$index];
        }
    }

    public function prosesCari(Request $request)
    {
        $kode_user = Crypt::encryptString($request->get('kode_user'));
        return redirect('/pencarian' . '/' . $kode_user);
    }

    public function tampilkanHasil($dataUser)
    {
        $converterKodeUser = Crypt::decryptString($dataUser);

        $dataUser = DataPencarian::where('kode_user', $converterKodeUser);
        $fetchDataUser = $dataUser->get()->toArray()[0];

        $idUser = $fetchDataUser['id_user'];
        $nama_produk = $fetchDataUser['nama_produk'];
        $berat_produk = $fetchDataUser['berat_produk'];
        $ukuran_produk = $fetchDataUser['ukuran_produk'];
        $volume_produk = $fetchDataUser['volume_produk'];


        $dataRiwayat = DataRiwayat::where('id_user', $idUser);
        $fetchDataRiwayat = $dataRiwayat->get()->toArray()[0];

        $dataKemasan = JenisKemasan::where('jenis_kemasan', json_decode($fetchDataRiwayat['keterangan'])->JenisKemasan);
        $fetchDataKemasan = $dataKemasan->get()->toArray()[0];

        $datas = [
            'namaproduk' => $nama_produk,
            'beratproduk' => $berat_produk,
            'ukuranproduk' => $ukuran_produk,
            'volumeproduk' => $volume_produk,

        ];
        $datas['hasilKriteria'] = json_decode($fetchDataRiwayat['kriteria']);
        $datas['JenisKemasan'] = json_decode($fetchDataRiwayat['jenis_kemasan'])->JenisKemasan;
        $datas['persentase'] = json_decode($fetchDataRiwayat['jenis_kemasan'])->Persentase;
        $datas['probabilitas'] = json_decode($fetchDataRiwayat['jenis_kemasan'])->Probabilitas;
        $datas['keterangan_kemasan'] = $fetchDataKemasan['keterangan_kemasan'];

        return view('user.hasil_pencarian', $datas);
    }
    }

