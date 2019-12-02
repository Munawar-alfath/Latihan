<html>
	<head>
		<meta charset="utf-8">
		<title>data santri</title>
	</head>
	<body>
		 <a href="tambah.php">Tambah data</a>
		 <table>
		 	<tr>
		 		<th>Nomor</th>
		 		<th>Nama</th>
		 		<th>Jenis kelamin</th>
		 		<th>Alamat</th>
		 		<th>Aksi</th>
		 	</tr>
		 	<?php 
				include 'koneksi.php';
				$nomor  = 1;
				$sql = "SELECT * FROM santri1";
				$result =mysqli_query($konek, $sql);

				function jkl($x){
				$j = $x;
				if ($j==1) {
					return "Laki-laki";
				}else{
					return "Perempuan";
				}	

				}


				if (mysqli_num_rows($result)) {
					while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['name']."</td>
						<td>".jkl($row['gender'])."</td>
						<td>".$row['address']."</td>
						<td>
						<a href='edit.php?id=".$row['id']."'>Edit</a>
						<a href='delete.php?id=".$row['id']."' onclick='javascript:retrun confrim(\"apakah anda ingin menghapus data ini?\")'>Hapus</a>
						</td>
					</tr>

					";
					}
				}
		 	 ?>
		 </table>
	</body>
</html>