<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class ModelDetailPesanan extends Model
{
    use HasFactory;

    protected $table = 'detail_pesanan';

    protected $fillable = [
        'id_pesanan',
        'id_produk',
        'jumlah',
        'harga',
    ];

    public function pesanan()
    {
        return $this->belongsTo(ModelPesanan::class, 'id_pesanan');
    }

    public function produk()
    {
        return $this->belongsTo(ModelProduk::class, 'id_produk');
    }
}
