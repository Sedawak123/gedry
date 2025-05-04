<?php

namespace App\Models;

use Database\Seeders\PesananSeeder;
use Database\Seeders\ProdukSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class ModelPengguna extends Model
{
    
    use HasFactory;

    protected $table = 'pengguna';

    protected $fillable = [
        'nama',
        'email',
        'kata_sandi',
        'telepon',
        'alamat',
        'peran',
    ];

    protected $hidden = [
        'kata_sandi',
    ];

    public function produk()
    {
        return $this->hasMany(ModelProduk::class, 'id_pengguna');
    }

    public function pesanan()
    {
        return $this->hasMany(PesananSeeder::class, 'id_pengguna');
    }
}

