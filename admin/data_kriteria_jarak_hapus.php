<?php
session_start();
include_once '../db/koneksi.php';

$id_jarak  = $_GET['id_jarak'];
$sql           = "DELETE FROM kriteriajarak WHERE id_jarak = '$id_jarak' ";
$query         = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
