<?php
session_start();
include_once '../db/koneksi.php';

$id_penghasilan   = $_GET['id_penghasilan'];
$sql        = "DELETE FROM kriteriapenghasilanortu WHERE id_penghasilan = '$id_penghasilan' ";
$query      = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
