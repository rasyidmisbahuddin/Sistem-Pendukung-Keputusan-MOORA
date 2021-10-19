<?php
session_start();
include_once '../db/koneksi.php';

$id_tanggungan   = $_GET['id_tanggungan'];
$sql          = "DELETE FROM kriteriatanggungan WHERE id_tanggungan = '$id_tanggungan' ";
$query        = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
