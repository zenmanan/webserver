<?php

   error_reporting(0);
   session_start();
   $host = "localhost";
   $username = "root";
   $password = "";
   $databasename = "crud_azhar";
   $connection = mysqli_connect($host, $username, $password, $databasename) or die (mysql_error());
   

?>