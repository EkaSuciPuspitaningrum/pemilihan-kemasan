<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
                'name' => 'Admin',
                'role' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => 'adminkemasan',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"), 
                // 'password' => Hash::make('adminkemasan'),
        ]);

        // User::create([
        //         'first_name_user' => 'Pengguna',
        //         'last_name_user' => 'Kemasan',
        //         'role' => 'User',
        //         'email' => 'user@mail.ac.id',
        //         'password' => 'userkemasan',
        //         'created_at' => date("Y-m-d H:i:s"),
        //         'updated_at' => date("Y-m-d H:i:s"), 
        //         // 'password' => Hash::make('adminkemasan'),
        // ]);

        // Pakar::create([
        //         'first_name_pakar' => 'Pakar',
        //         'last_name_pakar' => 'Kemasan',
        //         'role' => 'Pakar',
        //         'pend_terakhir' => 'S3/Setara',
        //         'nama_instansi' => 'Politeknik Negeri Jakarta',
        //         'email' => 'pakar@mail.ac.id',
        //         'password' => 'pakarkemasan',
        //         'created_at' => date("Y-m-d H:i:s"),
        //         'updated_at' => date("Y-m-d H:i:s"), 
        //         // 'password' => Hash::make('adminkemasan'),
        // ]);
    }
}
