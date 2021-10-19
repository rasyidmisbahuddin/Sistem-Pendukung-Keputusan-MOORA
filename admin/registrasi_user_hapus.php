<?php
session_start();
include_once '../db/koneksi.php';

$id_user   = $_GET['id_user'];
$sql       = "DELETE FROM user_acc WHERE id_user = '$id_user' ";
$query     = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"registrasi_user.php\" </script>";
} else {
  echo "<script>alert ('Data Belum Terhapus')</script>";
  echo "<script>window.location.href = \"registrasi_user.php\" </script>";
}
 ?>
