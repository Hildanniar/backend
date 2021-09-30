<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['edit'])) {

	$id_pembeli = $_POST['id_pembeli'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $asal_bank = $_POST['asal_bank'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "image/" . $foto; 

	if (empty($foto)) 
	{
		$query = "UPDATE bayar set nama = '$nama', alamat = '$alamat', email = '$email', no_hp = '$no_hp', asal_bank = '$asal_bank', tgl_bayar = '$tgl_bayar' where id_pembeli = '$id_pembeli'";
	}
	else
	{
		$file = mysqli_query($koneksi, "SELECT * FROM bayar where id_pembeli = '$id_pembeli' ");
		$hasil = mysqli_fetch_array($file);
		$foto_lama = $hasil['foto'];
		unlink("image/".$foto_lama);

		if (move_uploaded_file($tmp, $path)) 
		{
			$query = "UPDATE bayar set nama = '$nama', alamat = '$alamat', email = '$email', no_hp = '$no_hp', asal_bank = '$asal_bank', tgl_bayar = '$tgl_bayar', foto = '$foto' where id_pembeli = '$id_pembeli'";
	
		}
	}

	$result = mysqli_query($koneksi, $query);

	if (!$result) 	
	{
		die("Data gagal di ubah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
	}
	else
	{
		echo "<script> alert('Data Berhasil Diubah');
		window.location.href='data.php'</script> ";
	}

}
?>