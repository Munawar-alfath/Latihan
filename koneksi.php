<?php 
$server ="localhost";
$usr ="root";
$pass ="1";
$dbname ="latihan1";

$konek = mysqli_connect($server, $usr, $pass, $dbname);

if (!$konek) {
	die("koneksi gagal:".mysqli_connection_error());
}


 ?>

