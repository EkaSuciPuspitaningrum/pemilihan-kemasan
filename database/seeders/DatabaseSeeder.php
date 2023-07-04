<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('admin')->insert([
            [
                'name' => 'Admin',
                'username' => 'adminkemasan',
                'role' => 'Admin',
                'email' => 'admin@mail.ac.id',
                'password' => 'adminkemasan',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"), 
                // 'password' => Hash::make('adminkemasan'),
            ],
        ]);
    }
}
