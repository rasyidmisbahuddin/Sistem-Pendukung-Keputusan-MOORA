<?php
session_start();
include_once '../db/koneksi.php';

$id_kehadiran   = $_GET['id_kehadiran'];
$sql        = "DELETE FROM kriteriakehadiran WHERE id_kehadiran = '$id_kehadiran' ";
$query      = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
