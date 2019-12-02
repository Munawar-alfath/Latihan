 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah data</title>
 </head>
 <body>
 	<form action="proses_tambah.php" method="post">
 		<label for="namaInput">Nama :</label>
 		<input id="namaInput" type="text" name="name">
 		<br>

 		<label >Jenis Kelamin</label>
 		<label for="laki">Laki_Laki</label>
 		<input id="laki" type="radio" name="gender" value="1">
		<br>
 		<label for="pr">Perempuan</label>
 		<input id="pr" type="radio" name="gender" value="0">
		<br>
 		<label for="addressInput">Alamat</label>
 		<textarea name="address" id="addressInput" ></textarea>

 		<button type="submit">Kirim</button>
 	</form>
 
 </body>
 </html>