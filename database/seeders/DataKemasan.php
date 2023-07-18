<?php

namespace Database\Seeders;

use App\Models\JenisKemasan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataKemasan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisKemasan::insert([
            ['id'=> 1 , 'id_kemasan'=> "K-1", 'jenis_kemasan' => 'Plastik PET/PETE', 'keterangan_kemasan' => ''],
            ['id'=> 2 , 'id_kemasan'=> "K-2", 'jenis_kemasan' => 'Plastik HDPE', 'keterangan_kemasan' => ''],
            ['id'=> 3 , 'id_kemasan'=> "K-3", 'jenis_kemasan' => 'Plastik PVC', 'keterangan_kemasan' => ''],
            ['id'=> 4 , 'id_kemasan'=> "K-4", 'jenis_kemasan' => 'Plastik LDPE', 'keterangan_kemasan' => ''],
            ['id'=> 5 , 'id_kemasan'=> "K-5", 'jenis_kemasan' => 'Plastik PP', 'keterangan_kemasan' => ''],
            ['id'=> 6 , 'id_kemasan'=> "K-6", 'jenis_kemasan' => 'Plastik PS', 'keterangan_kemasan' => ''],
            ['id'=> 7 , 'id_kemasan'=> "K-7", 'jenis_kemasan' => 'Plastik NYLON', 'keterangan_kemasan' => ''],

        ]);
    }
}
