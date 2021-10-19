<?php
session_start();
include_once '../db/koneksi.php';

$id_siswa   = $_GET['id_siswa'];
$sql       = "DELETE FROM data_siswa WHERE id_siswa = '$id_siswa' ";
$query     = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_siswa.php\" </script>";
} else {
  echo "<script>alert ('Data Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_siswa.php\" </script>";
}
 ?>
