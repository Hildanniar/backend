<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "SELECT * FROM bayar WHERE id_pembeli = '$id'");

    while ($row = mysqli_fetch_array($result)) {
        $id_pembeli = $row["id_pembeli"];
        $nama = $row["nama"];
        $alamat = $row["alamat"];
        $email = $row["email"];
        $no_hp = $row["no_hp"];
        $asal_bank = $row["asal_bank"];
        $tgl_bayar = $row["tgl_bayar"];
        $foto = $row["foto"];
    }
} 
else {
    header("Location: data.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembeli</title>
</head>

<body>
<form action="prosesedit.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <fieldset>
        <legend><h3>Data Pembeli</h3></legend>
        <table>
            <tr>
                <td>ID Pembeli</td>
                <td>:</td>
                <td>
                    <input type="text" name="id_pembeli" id="id_pembeli" size="40" value="<?= $id_pembeli; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama" size="40" value="<?= $nama; ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" id="alamat" size="40" value="<?= $alamat; ?>">
                </td>   
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input type="text" name="email" id="email" size="40" value="<?= $email; ?>">
                </td>   
            </tr>
            <tr>
                <td>No Handphone</td>
                <td>:</td>
                <td>
                    <input type="int" name="no_hp" id="no_hp" size="40" value="<?= $no_hp; ?>">
                </td>   
            </tr>
            <tr>
                <td>Asal Bank</td>
                <td>:</td>
                <td>
                <select name="asal_bank" id="asal_bank">
                <option value="">---Asal Bank---</option>
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
                    <input type="date" name="tgl_bayar" id="tgl_bayar" size="40" value="<?= $tgl_bayar; ?>">
                </td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td><input type="file" name="foto" id="foto" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" id="edit" value="Simpan Data" /></td>
            </tr>
        </table>
    </fieldset>

</form>
</body>
</html>