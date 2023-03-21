<?php
include('konek.php');
$id = $_GET['id'];
$query = "DELETE FROM produk where id = '$id'";
$result = mysqli_query($konek, $query);

if(!$result) {
    die("Query Error : ".mysqli_errno($konek)." - ".mysqli_error($konek));

  } else {
    echo "<script>alert('Data Berhasil Dihapus!');window.location='index.php'</script>";

  }

  ?>