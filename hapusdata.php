<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // $hasil = mysqli_fetch_array($file);

    $query = "DELETE FROM bayar WHERE id_pembeli = '$id'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Data gagal dihapus." . mysqli_errno($koneksi) . mysqli_error($koneksi));
    } else {
        echo "<script>
                alert('Data Berhasil Dihapus !');
                window.location.href='data.php';
              </script>";
    }
}