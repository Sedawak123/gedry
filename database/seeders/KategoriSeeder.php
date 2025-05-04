<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('kategori')->insert([
            ['nama' => 'Makanan'],
            ['nama' => 'Kerajinan'],
            ['nama' => 'Pakaian'],
            ['nama' => 'Pertanian'],
        ]);

    }
}
