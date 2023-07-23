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
            ['id'=> "K001" , 'jenis_kemasan' => 'Plastik PET/PETE', 'keterangan_kemasan' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> "K002" , 'jenis_kemasan' => 'Plastik HDPE', 'keterangan_kemasan' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> "K003" , 'jenis_kemasan' => 'Plastik PVC', 'keterangan_kemasan' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> "K004" , 'jenis_kemasan' => 'Plastik LDPE', 'keterangan_kemasan' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> "K005" , 'jenis_kemasan' => 'Plastik PP', 'keterangan_kemasan' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> "K006" , 'jenis_kemasan' => 'Plastik PS', 'keterangan_kemasan' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> "K007" , 'jenis_kemasan' => 'Plastik NYLON', 'keterangan_kemasan' => '', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],

        ]);
    }
}
