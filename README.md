
<body>
    <h1>DESA MART</h1>
    <p><em>Solusi Pemasaran Digital untuk UMKM Desa</em></p>

<h2>Identitas</h2>
    <p><strong>Nama:</strong> GEDRY</p>
    <p><strong>NIM:</strong> D0223504</p>
    <p><strong>Mata Kuliah:</strong> Frame Work Base</p>
    <p><strong>Tahun:</strong> 2025</p>

<h2>Peran dan Fitur-fiturnya</h2>
    <h3>Admin</h3>
    <ul>
        <li>Mengelola data pengguna</li>
        <li>Mengelola data produk</li>
        <li>Mengelola kategori produk</li>
        <li>Melihat laporan penjualan</li>
    </ul>
    <h3>Penjual</h3>
    <ul>
        <li>Menambah dan mengedit produk</li>
        <li>Melihat pesanan dari pembeli</li>
        <li>Memperbarui status pesanan</li>
    </ul>
    <h3>Pembeli</h3>
    <ul>
        <li>Melihat dan mencari produk</li>
        <li>Melakukan pemesanan</li>
        <li>Melihat riwayat pembelian</li>
    </ul>
    <h2>Tabel-tabel Database</h2>
    <h3>1. Tabel Pengguna</h3>
    <table>
        <tr><th>Nama Lapangan</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>id_pengguna</td><td>BIGINT</td><td>Kunci Utama</td></tr>
        <tr><td>nama</td><td>VARCHAR(255)</td><td>Nama pengguna</td></tr>
        <tr><td>e-mail</td><td>VARCHAR(255)</td><td>Email pengguna</td></tr>
        <tr><td>kata_sandi</td><td>VARCHAR(255)</td><td>Kata sandi pengguna</td></tr>
        <tr><td>telepon</td><td>VARCHAR(255) NULL</td><td>Nomor telepon</td></tr>
        <tr><td>alamat</td><td>TEXT NULL</td><td>Alamat pengguna</td></tr>
        <tr><td>peran</td><td>ENUM</td><td>admin/penjual/pembeli</td></tr>
        <tr><td>dibuat_pada</td><td>timestamp</td><td>-</td></tr>
        <tr><td>diperbarui_pada</td><td>timestamp</td><td>-</td></tr>
    </table>
    <h3>2. Tabel Kategori</h3>
    <table>
        <tr><th>Nama Lapangan</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>id_kategori</td><td>BIGINT</td><td>Kunci Utama</td></tr>
        <tr><td>nama</td><td>VARCHAR(255)</td><td>Nama Kategori</td></tr>
        <tr><td>dibuat_pada</td><td>timestamp</td><td>-</td></tr>
        <tr><td>diperbarui_pada</td><td>timestamp</td><td>-</td></tr>
    </table>
    <h3>3. Tabel Produk</h3>
    <table>
        <tr><th>Nama Lapangan</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>id_produk</td><td>BIGINT</td><td>Kunci Utama</td></tr>
        <tr><td>id_pengguna</td><td>BIGINT</td><td>Kunci Asing ke pengguna</td></tr>
        <tr><td>id_kategori</td><td>BIGINT NULL</td><td>Kunci Asing ke kategori</td></tr>
        <tr><td>nama</td><td>VARCHAR(255)</td><td>Nama produk</td></tr>
        <tr><td>deskripsi</td><td>TEXT</td><td>Deskripsi produk</td></tr>
        <tr><td>harga</td><td>DECIMAL(10,2)</td><td>Harga produk</td></tr>
        <tr><td>stok</td><td>INT</td><td>Jumlah stok</td></tr>
        <tr><td>url_gambar</td><td>VARCHAR(255) NULL</td><td>URL gambar produk</td></tr>
        <tr><td>dibuat_pada</td><td>timestamp</td><td>-</td></tr>
        <tr><td>diperbarui_pada</td><td>timestamp</td><td>-</td></tr>
    </table>
    <h3>4. Tabel Pesanan</h3>
    <table>
        <tr><th>Nama Lapangan</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>id_pesanan</td><td>BIGINT</td><td>Kunci Utama</td></tr>
        <tr><td>id_pembelian</td><td>BIGINT</td><td>Kunci Asing ke pengguna (pembeli)</td></tr>
        <tr><td>total_harga</td><td>DECIMAL(10,2)</td><td>Total harga pesanan</td></tr>
        <tr><td>status</td><td>ENUM</td><td>tertunda/dikirim/selesai</td></tr>
        <tr><td>dibuat_pada</td><td>timestamp</td><td>-</td></tr>
        <tr><td>diperbarui_pada</td><td>timestamp</td><td>-</td></tr>
    </table>
    <h3>5. Tabel Detail Pesanan</h3>
    <table>
        <tr><th>Nama Lapangan</th><th>Tipe Data</th><th>Keterangan</th></tr>
        <tr><td>detail_id</td><td>BIGINT</td><td>Kunci Utama</td></tr>
        <tr><td>id_pesanan</td><td>BIGINT</td><td>Kunci Asing ke pesanan</td></tr>
        <tr><td>id_produk</td><td>BIGINT</td><td>Kunci Asing ke produk</td></tr>
        <tr><td>jumlah</td><td>INT</td><td>Jumlah produk</td></tr>
        <tr><td>subtotal</td><td>DECIMAL(10,2)</td><td>Subtotal harga</td></tr>
    </table>
    <h2>Jenis Relasi dan Tabel yang Berelasi</h2>
    <ul>
        <li>pengguna (1) -- (M) produk: Satu pengguna (penjual) dapat memiliki banyak produk</li>
        <li>kategori (1) -- (M) produk: Satu kategori dapat memiliki banyak produk</li>
        <li>pengguna (1) -- (M) pesanan: Satu pengguna (pembeli) dapat memiliki banyak pesanan</li>
        <li>pesanan (1) -- (M) detail_pesanan: Satu pesanan memiliki banyak detail pesanan</li>
        <li>produk (1) -- (M) detail_pesanan: Satu produk dapat ada di banyak detail pesanan</li>
    </ul>
</body>
</html>
