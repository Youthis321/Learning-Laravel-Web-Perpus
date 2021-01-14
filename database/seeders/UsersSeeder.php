<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@webperpus.com',
            'password' => 'admin123'
        ]);
        DB::table('users')->insert([
            'name' => 'Thisna',
            'role' => 'anggota',
            'anggota_id' => 1,
            'email' => 'thisna@webperpus.com',
            'password' => 'anggota123'
        ]);
        DB::table('users')->insert([
            'name' => 'Haqi',
            'role' => 'anggota',
            'anggota_id' => 2,
            'email' => 'haqi@webperpus.com',
            'password' => 'anggota123'
        ]);
    }
}
