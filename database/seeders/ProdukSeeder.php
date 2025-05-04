<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            [
                'id' => 2,
                'nama' => 'Keripik Pisang',
                'pengguna_id' => 1,
                'deskripsi' => 'Keripik pisang renyah.',
                'harga' => 15000,
                'stok' => 100,
                'url_gambar' => 'keripik_pisang.jpg',
                'id_kategori' => 1
            ],
            [
                'id' => 2,
                'nama' => 'Sambal Desa',
                'pengguna_id' => 1,
                'deskripsi' => 'Sambal khas desa.',
                'harga' => 20000,
                'stok' => 50,
                'url_gambar' => 'sambal_desa.jpg',
                'id_kategori' => 1
            ],
            [
                'id' => 3,
                'nama' => 'Tas Rajut',
                'pengguna_id' => 1,
                'deskripsi' => 'Tas rajut handmade.',
                'harga' => 75000,
                'stok' => 30,
                'url_gambar' => 'tas_rajut.jpg',
                'id_kategori' => 2
            ],
            [
                'id' => 3,
                'nama' => 'Topi Jerami',
                'pengguna_id' => 1,
                'deskripsi' => 'Topi jerami untuk bertani.',
                'harga' => 25000,
                'stok' => 40,
                'url_gambar' => 'topi_jerami.jpg',
                'id_kategori' => 4
            ],
        ]);
    }
}
