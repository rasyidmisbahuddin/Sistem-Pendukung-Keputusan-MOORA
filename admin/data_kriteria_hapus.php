<?php
session_start();
include_once '../db/koneksi.php';

$id_kriteria   = $_GET['id_kriteria'];
$sql        = "DELETE FROM moo_kriteria WHERE id_kriteria = '$id_kriteria' ";
$query      = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
