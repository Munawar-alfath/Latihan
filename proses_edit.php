<?php 
include 'koneksi.php';
$id  = $_POST['id'];
$nama =$_POST['name'];
$gender =$_POST['gender'];
$adrs =$_POST['address'];

$sql ="UPDATE santri1 SET name = '$nama', gender = '$gender', address = '$adrs' WHERE  id = '$id'";
header('location:index.php')
 ?>