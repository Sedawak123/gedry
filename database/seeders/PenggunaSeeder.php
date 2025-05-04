<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Databases\Seeder\Pengguna;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengguna')->insert([
            [
                'nama' => 'Admin DesaMart',
                'email' => 'admin@desamart.com',
                'kata_sandi' => Hash::make('password'),
                'telepon' => '081234567890',
                'alamat' => 'Kantor Pusat',
                'peran' => 'admin'
            ],
            [
                'nama' => 'Penjual 1',
                'email' => 'penjual1@desamart.com',
                'kata_sandi' => Hash::make('password'),
                'telepon' => '0811111111',
                'alamat' => 'Desa A',
                'peran' => 'penjual'
            ],
            [
                'nama' => 'Penjual 2',
                'email' => 'penjual2@desamart.com',
                'kata_sandi' => Hash::make('password'),
                'telepon' => '0812222222',
                'alamat' => 'Desa B',
                'peran' => 'penjual'
            ],
            [
                'nama' => 'Pembeli 1',
                'email' => 'pembeli1@desamart.com',
                'kata_sandi' => Hash::make('password'),
                'telepon' => '0823333333',
                'alamat' => 'Desa C',
                'peran' => 'pembeli'
            ],
        ]);
    }
}
