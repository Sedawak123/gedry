<?php

namespace App\Models;

use Database\Seeders\ProdukSeeder;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelKategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $fillable = [
        'nama',
    ];

    public function produk()
    {
        return $this->hasMany(ProdukSeeder::class, 'id_kategori');
    }
}
