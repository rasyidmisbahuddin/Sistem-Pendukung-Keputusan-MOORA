<?php
session_start();
include_once '../db/koneksi.php';

$id_pendidikan   = $_GET['id_pendidikan'];
$sql        = "DELETE FROM kriteriapendidikan WHERE id_pendidikan = '$id_pendidikan' ";
$query      = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
