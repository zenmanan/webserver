<?php include('konek.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Produk</title>
    <style type="text/css">
         * {
            font-family: fantasy;
        }
        h1 {
            text-transform: uppercase;
            color: crimson;
        }
        .base {
            width: 400px;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            background-color: #ededed;
        }
        label {
            margin-top : 10px;
            float: left;
            text-align: left;
            width: 100%;

        }
        input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background-color: #f6f6f6;
            border: 2px solid #ccc;
            outline-color: crimson;
        }
        button {
            background-color: crimson;
            color: #fff;
            padding: 10px;
            font-size: 12px;
            border: 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <center><h1>Tambah Produk</h1></center>
    <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
    <section class="base">
        <div>
            <label> Nama Produk </label>
            <input type="text" name="nama_produk" autofocus="" required=""/>

        </div>
        <div>
        <label> Deskripsi </label>
            <input type="text" name="deskripsi" required=""/>
        </div>
        <div>
        <label> Harga Beli </label>
            <input type="text" name="harga_beli" required=""/>
        </div>
        <div>
        <label> Harga Jual </label>
            <input type="text" name="harga_jual" required=""/>
        </div>
        <div>
        <label> Gambar Produk </label>
            <input type="file" name="gambar_produk" required=""/>
        </div>
        <div>
            <button type="submit">Simpan Produk</button>
        </div>
    </section>
</form>    
</body>
</html>