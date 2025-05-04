<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class ModelPesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $fillable = [
        'id_pengguna',
        'total_harga',
        'status',
        'tanggal_pesan',
    ];

    public function pengguna()
    {
        return $this->belongsTo(ModelPengguna::class, 'id_pengguna');
    }

    public function detailPesanan()
    {
        return $this->hasMany(ModelDetailPesanan::class, 'id_pesanan');
    }
}
