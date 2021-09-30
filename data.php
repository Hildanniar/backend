<?php
	error_reporting(0);
	include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>DATA PEMBELI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<h1 style="text-align: center;">Data Pembeli</h1>
	<center><a href="bayar.php">Tambah Data</a></center>
	<table border="1" style="margin: auto;">
		<thead>
		<tr>
			<th>ID Pembeli</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>No.Handphone</th>
			<th>Asal Bank</th>
			<th>Tanggal Bayar</th>
			<th>Foto</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php

			$result = mysqli_query($koneksi, "SELECT * FROM bayar");
			while ($row = mysqli_fetch_array($result)) {

		?>
				<tr>
					<td><?php echo $row['id_pembeli'];?></td>
					<td><?php echo $row['nama'];?></td>
					<td><?php echo $row['alamat'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['no_hp'];?></td>
					<td><?php echo $row['asal_bank'];?></td>
					<td><?php echo $row['tgl_bayar'];?></td>
					<td>
						<center>
							<img src="image/<?php echo $row['foto'];?> "border="0" width="70px" height="70px"/>
						</center>
					</td>
					<td>
						<a href="editdata.php?id=<?php echo $row['id_pembeli'];?>">Edit</a>
						<a href="hapusdata.php?id=<?php echo $row['id_pembeli'];?>">Hapus</a>
					</td>

				</tr>
				<?php } ?>	
		</tbody>
	</table>
</body>
</html>