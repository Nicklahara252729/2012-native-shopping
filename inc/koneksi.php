<?php
$server = "localhost";
$username = "root";
$password = "satusampe250599";
$database = "2012_web_native_shopping";

mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
