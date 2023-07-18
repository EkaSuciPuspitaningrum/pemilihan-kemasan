<?php

namespace Database\Seeders;

use App\Models\BasisPengetahuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataPengetahuan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BasisPengetahuan::insert([
            //PET/PETE
            ['id'=> 1 , 'id_pengetahuan'=> "BPK-1", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin', 'nilai_cf' => '0.6'],
            ['id'=> 2 , 'id_pengetahuan'=> "BPK-2", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Disimpan dalam suhu ruang', 'nilai_cf' => '1'],
            ['id'=> 3 , 'id_pengetahuan'=> "BPK-3", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung air', 'nilai_cf' => '1'],
            ['id'=> 4 , 'id_pengetahuan'=> "BPK-4", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air', 'nilai_cf' => '1'],
            ['id'=> 5 , 'id_pengetahuan'=> "BPK-5", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas', 'nilai_cf' => '0.8'],
            ['id'=> 6 , 'id_pengetahuan'=> "BPK-6", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap', 'nilai_cf' => '0.8'],
            ['id'=> 7 , 'id_pengetahuan'=> "BPK-7", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung bahan pengawet buatan', 'nilai_cf' => '0.8'],
            ['id'=> 8 , 'id_pengetahuan'=> "BPK-8", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung bahan pewarna buatan', 'nilai_cf' => '0.8'],
            ['id'=> 9 , 'id_pengetahuan'=> "BPK-9", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung lemak/minyak', 'nilai_cf' => '0.6'],
            ['id'=> 10 , 'id_pengetahuan'=> "BPK-10", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Beraroma', 'nilai_cf' => '0.8'],
            ['id'=> 11 , 'id_pengetahuan'=> "BPK-11", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung bahan kimia', 'nilai_cf' => '0.8'],
            ['id'=> 12 , 'id_pengetahuan'=> "BPK-12", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung asam', 'nilai_cf' => '0.8'],

            //HDPE
            ['id'=> 13 , 'id_pengetahuan'=> "BPK-13", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin', 'nilai_cf' => '0.4'],
            ['id'=> 14 , 'id_pengetahuan'=> "BPK-14", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Disimpan dalam suhu ruang', 'nilai_cf' => '0.8'],
            ['id'=> 15 , 'id_pengetahuan'=> "BPK-15", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung air', 'nilai_cf' => '0.8'], 
            ['id'=> 16 , 'id_pengetahuan'=> "BPK-16", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air', 'nilai_cf' => '0.4'],
            ['id'=> 17 , 'id_pengetahuan'=> "BPK-17", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas', 'nilai_cf' => '0.6'],
            ['id'=> 18 , 'id_pengetahuan'=> "BPK-18", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung bahan pengawet buatan', 'nilai_cf' => '0.6'],
            ['id'=> 19 , 'id_pengetahuan'=> "BPK-19", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung bahan pewarna buatan', 'nilai_cf' => '0.6'],
            ['id'=> 20 , 'id_pengetahuan'=> "BPK-20", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung lemak/minyak', 'nilai_cf' => '0.6'],
            ['id'=> 21 , 'id_pengetahuan'=> "BPK-21", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung asam', 'nilai_cf' => '0.4'],
            ['id'=> 22 , 'id_pengetahuan'=> "BPK-22", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Beralkohol', 'nilai_cf' => '0.4'],
            ['id'=> 23 , 'id_pengetahuan'=> "BPK-23", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung bahan kimia', 'nilai_cf' => '0.8'],

            //PVC
            ['id'=> 24 , 'id_pengetahuan'=> "BPK-24", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin', 'nilai_cf' => '0.6'],
            ['id'=> 25 , 'id_pengetahuan'=> "BPK-25", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Disimpan dalam suhu ruang', 'nilai_cf' => '0.8'],
            ['id'=> 26 , 'id_pengetahuan'=> "BPK-26", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung air', 'nilai_cf' => '0.6'],   
            ['id'=> 27 , 'id_pengetahuan'=> "BPK-27", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air', 'nilai_cf' => '0.4'],
            ['id'=> 28 , 'id_pengetahuan'=> "BPK-28", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas', 'nilai_cf' => '0.2'],
            ['id'=> 29 , 'id_pengetahuan'=> "BPK-29", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap', 'nilai_cf' => '0.6'],
            ['id'=> 30 , 'id_pengetahuan'=> "BPK-30", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung bahan pengawet buatan', 'nilai_cf' => '0.6'],
            ['id'=> 31 , 'id_pengetahuan'=> "BPK-31", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung bahan pewarna buatan', 'nilai_cf' => '0.6'],
            ['id'=> 32 , 'id_pengetahuan'=> "BPK-32", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung lemak/minyak', 'nilai_cf' => '0.2'],
            ['id'=> 33 , 'id_pengetahuan'=> "BPK-33", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung asam', 'nilai_cf' => '0.4'],
            ['id'=> 34 , 'id_pengetahuan'=> "BPK-34", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Beralkohol', 'nilai_cf' => '0.4'],
            
            //LDPE
            ['id'=> 35 , 'id_pengetahuan'=> "BPK-35", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin', 'nilai_cf' => '0.4'],
            ['id'=> 36 , 'id_pengetahuan'=> "BPK-36", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Disimpan dalam suhu ruang', 'nilai_cf' => '0.8'],   
            ['id'=> 37 , 'id_pengetahuan'=> "BPK-37", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung air', 'nilai_cf' => '0.6'],   
            ['id'=> 38 , 'id_pengetahuan'=> "BPK-38", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air', 'nilai_cf' => '0.4'],
            ['id'=> 39 , 'id_pengetahuan'=> "BPK-39", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas', 'nilai_cf' => '0.4'],
            ['id'=> 40 , 'id_pengetahuan'=> "BPK-40", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap', 'nilai_cf' => '0.4'],
            ['id'=> 41 , 'id_pengetahuan'=> "BPK-41", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung bahan pengawet buatan', 'nilai_cf' => '0.4'],
            ['id'=> 42 , 'id_pengetahuan'=> "BPK-42", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung bahan pewarna buatan', 'nilai_cf' => '0.4'],
            ['id'=> 43 , 'id_pengetahuan'=> "BPK-43", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung lemak/minyak', 'nilai_cf' => '0.4'],
            ['id'=> 44 , 'id_pengetahuan'=> "BPK-44", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung asam', 'nilai_cf' => '0.4'],
            ['id'=> 45 , 'id_pengetahuan'=> "BPK-45", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Beralkohol', 'nilai_cf' => '0.4'],
            ['id'=> 46 , 'id_pengetahuan'=> "BPK-46", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung bahan kimia', 'nilai_cf' => '0.4'],
        
            //PP
            ['id'=> 47 , 'id_pengetahuan'=> "BPK-47", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin', 'nilai_cf' => '0.8'],
            ['id'=> 48 , 'id_pengetahuan'=> "BPK-48", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Disimpan dalam suhu ruang', 'nilai_cf' => '1'],   
            ['id'=> 49 , 'id_pengetahuan'=> "BPK-49", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung air', 'nilai_cf' => '0.8'],   
            ['id'=> 50 , 'id_pengetahuan'=> "BPK-50", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas', 'nilai_cf' => '0.8'],
            ['id'=> 51 , 'id_pengetahuan'=> "BPK-51", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap', 'nilai_cf' => '0.8'],
            ['id'=> 52 , 'id_pengetahuan'=> "BPK-52", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung bahan pengawet buatan', 'nilai_cf' => '0.8'],
            ['id'=> 53 , 'id_pengetahuan'=> "BPK-53", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung bahan pewarna buatan', 'nilai_cf' => '0.8'],
            ['id'=> 54 , 'id_pengetahuan'=> "BPK-54", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung lemak/minyak', 'nilai_cf' => '0.8'],
            ['id'=> 55 , 'id_pengetahuan'=> "BPK-55", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung asam', 'nilai_cf' => '0.8'],
            ['id'=> 56 , 'id_pengetahuan'=> "BPK-56", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung bahan kimia', 'nilai_cf' => '0.8'],

            //PS
            ['id'=> 57 , 'id_pengetahuan'=> "BPK-57", 'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin', 'nilai_cf' => '0.2'],
            ['id'=> 58 , 'id_pengetahuan'=> "BPK-58", 'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Disimpan dalam suhu ruang', 'nilai_cf' => '0.8'],   
            ['id'=> 59 , 'id_pengetahuan'=> "BPK-59", 'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas', 'nilai_cf' => '0.4'],
            ['id'=> 60 , 'id_pengetahuan'=> "BPK-60", 'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap', 'nilai_cf' => '0.6'],
            ['id'=> 61 , 'id_pengetahuan'=> "BPK-61", 'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Mengandung bahan pengawet buatan', 'nilai_cf' => '0.6'],
            ['id'=> 62 , 'id_pengetahuan'=> "BPK-62", 'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Mengandung bahan pewarna buatan', 'nilai_cf' => '0.6'],

            //NYLON
            ['id'=> 63 , 'id_pengetahuan'=> "BPK-63", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin', 'nilai_cf' => '1'],
            ['id'=> 64 , 'id_pengetahuan'=> "BPK-64", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Disimpan dalam suhu ruang', 'nilai_cf' => '1'],  
            ['id'=> 65 , 'id_pengetahuan'=> "BPK-65", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Mengandung air', 'nilai_cf' => '0.8'],
            ['id'=> 66 , 'id_pengetahuan'=> "BPK-66", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air', 'nilai_cf' => '1'],
            ['id'=> 67 , 'id_pengetahuan'=> "BPK-67", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas', 'nilai_cf' => '1'],
            ['id'=> 68 , 'id_pengetahuan'=> "BPK-68", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap', 'nilai_cf' => '1'], 
            ['id'=> 69 , 'id_pengetahuan'=> "BPK-69", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Bersifat tajam atau berduri', 'nilai_cf' => '0.2'],
            ['id'=> 70 , 'id_pengetahuan'=> "BPK-70", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Mengandung lemak/minyak', 'nilai_cf' => '0.6'],
            ['id'=> 71 , 'id_pengetahuan'=> "BPK-71", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Mengandung asam', 'nilai_cf' => '0.6'],
            
        ]);
    }
}
