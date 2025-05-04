<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class ModelProduk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'id_pengguna',
        'nama',
        'deskripsi',
        'harga',
        'stok',
        'url_gambar',
        'id_kategori',
    ];

    public function pengguna()
    {
        return $this->belongsTo(ModelPengguna::class, 'id_pengguna');
    }

    public function kategori()
    {
        return $this->belongsTo(ModelKategori::class, 'id_kategori');
    }
}
