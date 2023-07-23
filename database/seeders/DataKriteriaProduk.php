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
            ['id'=> 1 , 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin', 'keterangan_kriteria' => ' Dapat disimpan dalam freezer dengan suhu lebih dari sama dengan -30 C', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 2 , 'kriteria_produk' => 'Dapat disimpan dalam suhu ruang', 'keterangan_kriteria' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 3 , 'kriteria_produk' => 'Mengandung air', 'keterangan_kriteria' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 4 , 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air', 'keterangan_kriteria' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 5 , 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas', 'keterangan_kriteria' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 6 , 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap', 'keterangan_kriteria' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 7 , 'kriteria_produk' => 'Mengandung bahan pengawet buatan', 'keterangan_kriteria' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 8 , 'kriteria_produk' => 'Mengandung bahan pewarna buatan', 'keterangan_kriteria' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 9 , 'kriteria_produk' => 'Bersifat tajam atau berduri', 'keterangan_kriteria' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 10  , 'kriteria_produk' => 'Mengandung lemak atau minyak', 'keterangan_kriteria' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 11  , 'kriteria_produk' => 'Mengandung asam', 'keterangan_kriteria' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 12  , 'kriteria_produk' => 'Beraroma', 'keterangan_kriteria' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 13  , 'kriteria_produk' => 'Beralkohol', 'keterangan_kriteria' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 14  , 'kriteria_produk' => 'Mengandung bahan kimia', 'keterangan_kriteria' => 'Seperti asam formal, fenol (terkandung dalam makanan yang melalui proses pengasapan), pelarut petroleum (pengatur kadar lemak dan minyak), zat pengatur keasaman)', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
        ]);
    }
}
