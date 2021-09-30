<?php
error_reporting(0);
include 'koneksi.php';


if (isset($_POST['simpan'])) {

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

    if (move_uploaded_file($tmp, $path)) {
        $query = "INSERT INTO bayar VALUES ('$id_pembeli','$nama','$alamat','$email','$no_hp','$asal_bank', 
        '$tgl_bayar','$foto')";

        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Query gagal dijalankan." . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        } 
        else 
        {
            echo "<script>  alert('Data Berhasil Ditambah !'); window.location.href='data.php';</script>";
        }
    }
}

?>