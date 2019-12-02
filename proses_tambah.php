<?php 
include 'koneksi.php';
$nama =$_POST['name'];
$gender =$_POST['gender'];
$adrs =$_POST['address'];

$sql = "INSERT INTO santri1 (name,gender,address) VALUES ('$nama', '$gender', '$adrs')";

mysqli_query($konek, $sql);
header('location: index.php');