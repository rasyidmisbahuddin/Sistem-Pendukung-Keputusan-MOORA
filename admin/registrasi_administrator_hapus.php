<?php
session_start();
include_once '../db/koneksi.php';

$id_admin   = $_GET['id_admin'];
$sql       = "DELETE FROM admin_acc WHERE id_admin = '$id_admin' ";
$query     = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"registrasi_administrator.php\" </script>";
} else {
  echo "<script>alert ('Data Belum Terhapus')</script>";
  echo "<script>window.location.href = \"registrasi_administrator.php\" </script>";
}
 ?>
