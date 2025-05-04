<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pesanan')->insert([
            [
                'id_pengguna' => 4,
                'total_harga' => 55000,
                'status' => 'dibayar',
                'tanggal_pesan' => Carbon::now(),
            ],
            [
                'id_pengguna' => 4,
                'total_harga' => 75000,
                'status' => 'menunggu',
                'tanggal_pesan' => Carbon::now(),
            ],
            [
                'id_pengguna' => 4,
                'total_harga' => 25000,
                'status' => 'dikirim',
                'tanggal_pesan' => Carbon::now(),
            ],
            [
                'id_pengguna' => 4,
                'total_harga' => 150000,
                'status' => 'selesai',
                'tanggal_pesan' => Carbon::now(),
            ],
        ]);
    }
}
