<?php
session_start();
include_once '../db/koneksi.php';

$id_ratanilai = $_GET['id_ratanilai'];
$sql           = "DELETE FROM kriteriaratanilai WHERE id_ratanilai = '$id_ratanilai' ";
$query         = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
