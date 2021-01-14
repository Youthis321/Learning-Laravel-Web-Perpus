<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota')->insert([
            'nama' => 'Thisna',
            'no_anggota' => 2020001,
            'alamat' => 'Jl. Jagakarsa, Pasar Minggu, Jaksel',
            'nohp' => '081297730300',
            'role' => 'Laki-laki',
            'akun_FB' => 'Thisna YouThis'
        ]);
        DB::table('anggota')->insert([
            'nama' => 'Haqi',
            'no_anggota' => 2020002,
            'alamat' => 'Jl. Cilandak, Cilandak, Jaksel',
            'nohp' => '087101878210',
            'role' => 'Perempuan',
            'akun_FB' => 'Haqiyati Sari',
        ]);
    }
}
