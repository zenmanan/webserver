<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "crud_azhar";
    $konek = mysqli_connect($host,$user,$pass,$db);


    if(!$konek) {
        die("konek dengan database gagal: ".mysql_connect_error());
    } 

?>