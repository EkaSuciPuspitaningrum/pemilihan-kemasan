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
            ['id'=> 1 , 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 2 , 'kriteria_produk' => 'Dapat disimpan dalam suhu ruang', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 3 , 'kriteria_produk' => 'Mengandung air', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 4 , 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 5 , 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 6 , 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 7 , 'kriteria_produk' => 'Mengandung bahan pengawet buatan', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 8 , 'kriteria_produk' => 'Mengandung bahan pewarna buatan', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 9 , 'kriteria_produk' => 'Bersifat tajam atau berduri', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 10  , 'kriteria_produk' => 'Mengandung lemak atau minyak', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 11  , 'kriteria_produk' => 'Mengandung asam', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 12  , 'kriteria_produk' => 'Beraroma', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 13  , 'kriteria_produk' => 'Beralkohol', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 14  , 'kriteria_produk' => 'Mengandung bahan kimia', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
        ]);
    }
}
