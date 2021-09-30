<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Input Konfirmasi Pembeli</title>
</head>

<body>
<form action="prosesbayar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<fieldset>
		<legend><h3>Data Pembeli</h3></legend>
		<table>
			<tr>
				<td>ID Pembeli</td>
				<td>:</td>
				<td>
					<input type="text" name="id_pembeli" id="id_pembeli" size="40" />
				</td>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="text" name="nama" id="nama" size="40" />
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<input type="text" name="alamat" id="alamat" size="40" />
				</td>	
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input type="text" name="email" id="email" size="40" />
				</td>	
			</tr>
			<tr>
				<td>No Handphone</td>
				<td>:</td>
				<td>
					<input type="int" name="no_hp" id="no_hp" size="40" />
				</td>	
			</tr>
			<tr>
				<td>Asal Bank</td>
				<td>:</td>
				<td>
				<select>
				<option value="asal_bank">---Asal Bank---</option>
				<option value="BNI">BNI</option>
				<option value="BRI">BRI</option>
				<option value="BCA">BCA</option>
				<option value="Mandiri">Mandiri</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Tanggal Bayar</td>
				<td>:</td>
				<td>
					<input type="date" name="tgl_bayar" id="tgl_bayar" size="40" />
				</td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>:</td>
				<td><input type="file" name="foto" id="foto" /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="simpan" id="simpan" value="Simpan Data" /></td>
			</tr>
		</table>
	</fieldset>

</form>
</body>
</html>