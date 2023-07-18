<?php

namespace Database\Seeders;

use App\Models\KriteriaProduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataKriteriaProduk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KriteriaProduk::insert([
            ['id'=> 1 , 'id_kriteria'=> "P-1", 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin', 'keterangan_kriteria' => ' Dapat disimpan dalam freezer dengan suhu lebih dari sama dengan -30 C'],
            ['id'=> 2 , 'id_kriteria'=> "P-2", 'kriteria_produk' => 'Dapat disimpan dalam suhu ruang', 'keterangan_kriteria' => ''],
            ['id'=> 3 , 'id_kriteria'=> "P-3", 'kriteria_produk' => 'Mengandung air', 'keterangan_kriteria' => ''],
            ['id'=> 4 , 'id_kriteria'=> "P-4", 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air', 'keterangan_kriteria' => ''],
            ['id'=> 5 , 'id_kriteria'=> "P-5", 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas', 'keterangan_kriteria' => ''],
            ['id'=> 6 , 'id_kriteria'=> "P-6", 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap', 'keterangan_kriteria' => ''],
            ['id'=> 7 , 'id_kriteria'=> "P-7", 'kriteria_produk' => 'Mengandung bahan pengawet buatan', 'keterangan_kriteria' => ''],
            ['id'=> 8 , 'id_kriteria'=> "P-8", 'kriteria_produk' => 'Mengandung bahan pewarna buatan', 'keterangan_kriteria' => ''],
            ['id'=> 9 , 'id_kriteria'=> "P-9", 'kriteria_produk' => 'Bersifat tajam atau berduri', 'keterangan_kriteria' => ''],
            ['id'=> 10 , 'id_kriteria'=> "P-10", 'kriteria_produk' => 'Mengandung lemak atau minyak', 'keterangan_kriteria' => ''],
            ['id'=> 11 , 'id_kriteria'=> "P-11", 'kriteria_produk' => 'Mengandung asam', 'keterangan_kriteria' => ''],
            ['id'=> 12 , 'id_kriteria'=> "P-12", 'kriteria_produk' => 'Beraroma', 'keterangan_kriteria' => ''],
            ['id'=> 13 , 'id_kriteria'=> "P-13", 'kriteria_produk' => 'Beralkohol', 'keterangan_kriteria' => ''],
            ['id'=> 14 , 'id_kriteria'=> "P-14", 'kriteria_produk' => 'Mengandung bahan kimia', 'keterangan_kriteria' => 'Seperti asam formal, fenol (terkandung dalam makanan yang melalui proses pengasapan), pelarut petroleum (pengatur kadar lemak dan minyak), zat pengatur keasaman)'],
        ]);
    }
}
