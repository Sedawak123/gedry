<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Usher disini
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('kata_sandi');
            $table->string('telepon')->nullable();
            $table->text('alamat')->nullable();
            $table->enum('peran', ['admin', 'penjual', 'pembeli'])->default('pembeli');
            $table->timestamps();
        });
        
        // Kategori ini
        Schema::create('kategori', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->timestamps();
        });
        
        
        // Produk disini
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id'); 
            $table->foreignId('pengguna_id')->constrained('pengguna')->onDelete('cascade'); // Foreign key ke pengguna
            $table->string('nama');
            $table->text('deskripsi');
            $table->decimal('harga', 10, 2);
            $table->integer('stok');
            $table->string('url_gambar')->nullable();
            $table->foreignId('id_kategori')->nullable()->constrained('kategori')->onDelete('set null'); // Foreign key ke kategori
            $table->timestamps();
        });
         
        // orderan ini
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('pengguna_id')->constrained('pengguna')->onDelete('cascade');
            $table->decimal('total_harga', 10, 2);
            $table->enum('status', ['menunggu', 'dibayar', 'dikirim', 'selesai', 'dibatalkan'])->default('menunggu');
            $table->timestamp('tanggal_pesan')->useCurrent();
            $table->timestamps();
        });
        

        // order barang ini
        Schema::create('detail_pesanan', function (Blueprint $table) {
            $table->id('id_detail_pesanan');
            $table->foreignId('id_pesanan')->constrained('pesanan')->onDelete('cascade');
            $table->foreignId('id_produk')->constrained('produk')->onDelete('cascade');
            $table->integer('jumlah');
            $table->decimal('harga', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
        Schema::dropIfExists('kategori');
        Schema::dropIfExists('produk');
        Schema::dropIfExists('pesanan');
        Schema::dropIfExists('detail_pesanan');
    }
};  
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            