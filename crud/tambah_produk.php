<?php
include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html>

<head>
    <title>CRUD Produk dengan gambar</title>
</head>

<body>
    <center>
        <h1>Tambah Produk</h1>
        <center>
            <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
                <section class="base">
                    <div>
                        <label>Nama Produk</label>
                        <input type="text" name="nama_produk" autofocus="" required="" />
                    </div>
                    <div>
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" />
                    </div>
                    <div>
                        <label>Harga Beli</label>
                        <input type="text" name="harga_beli" required="" />
                    </div>
                    <div>
                        <label>Harga Jual</label>
                        <input type="text" name="harga_jual" required="" />
                    </div>
                    <div>
                        <label>Gambar Produk</label>
                        <input type="file" name="gambar_produk" required="" />
                    </div>
                    <div>
                        <button type="submit">Simpan Produk</button>
                    </div>
                </section>
            </form>
</body>

</html>