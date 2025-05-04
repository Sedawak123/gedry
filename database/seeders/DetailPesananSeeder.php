<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_pesanan')->insert([
            [
                'id_pesanan' => 1,
                'id_produk' => 1,
                'jumlah' => 2,
                'harga' => 15000,
            ],
            [
                'id_pesanan' => 1,
                'id_produk' => 2,
                'jumlah' => 1,
                'harga' => 20000,
            ],
            [
                'id_pesanan' => 2,
                'id_produk' => 3,
                'jumlah' => 1,
                'harga' => 75000,
            ],
            [
                'id_pesanan' => 3,
                'id_produk' => 4,
                'jumlah' => 1,
                'harga' => 25000,
            ],
        ]);
    }
}
