 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah data</title>
 </head>
 <body>
 	<?php 
     include 'koneksi.php';
 	 $id  = $_GET['id'];
 	 $sql = "SELECT * FROM santri1 WHERE id=$id ";
 	 $result = mysqli_query($konek,$sql);
 	 $row = mysqli_fetch_assoc($result);
 	 ?>

 	<form action="proses_edit.php" method="post">
		<input type="hidden" value="<?php echo $id ?>" name="id">
 		<!-- nama input -->
 		<label for="namaInput">Nama :</label>
 		<input id="namaInput" type="text" name="name" value="<?php echo $row['name'] ?> ">
 		<br>

 		<label >Jenis Kelamin</label>
 		<label for="laki">Laki_Laki</label>
 		<input id="laki" type="radio" name="gender" value="1" <?php echo ($row['gender'])?'cheked':'' ?> >
		<br>
 		<label for="pr">Perempuan</label>
 		<input id="pr" type="radio" name="gender" value="0" <?php echo ($row['gender'])?'':'cheked' ?> >
		<br>
 		<label for="addressInput">Alamat</label>
 		<textarea name="address" id="addressInput" ></textarea>

 		<button type="submit">Kirim</button>
 	</form>
 
 </body>
 </html>