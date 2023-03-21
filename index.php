<?php include('konek.php'); ?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

<title>Produk</title>

<style type="text/css">
        * {
            font-family: fantasy;
            </style>
        
</head>

<body>
    <center><h1>DATA PRODUK</h1></center>
    <center><a href="tambah_produk.php"> <button type="button" class="btn btn-primary">Tambah Produk</button></a></center>
   
    <br>
    <table class="table table-warning">
        <thead>
            <tr class="table-primary">
                <th>No.</th>
                <th>Produk</th>
                <th>Deskripsi</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                  $query = "SELECT * FROM produk ORDER BY id ASC";
                  $result = mysqli_query($konek, $query);


                  if(!$result) {
                    die("Query Error : ".mysqli_errno($konek)." - ".mysqli_error($konek));
                  }
                  $no = 1;

                  while ($row = mysqli_fetch_assoc($result)) {

            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nama_produk']; ?></td>
                <td><?php echo substr($row['deskripsi'], 0, 20); ?>...</td>
                <td>Rp <?php echo number_format($row['harga_beli'], 0,',','.') ; ?></td>
                <td>Rp <?php echo number_format($row['harga_jual'], 0,',','.') ; ?></td>
                <td><img style="width: 120px;" src="gambar/<?php echo $row['gambar_produk']; ?>"></td>
                <td>
                    <a href="edit_produk.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                    <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?💀  ')"><button type="button" class="btn btn-danger">Hapus</button></a>
                </td>
            </tr>
            <?php
            $no++;

        }
            
            ?>


        </tbody>
    </table>
</body>
</html>