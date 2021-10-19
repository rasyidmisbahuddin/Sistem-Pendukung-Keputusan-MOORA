<?php
session_start();
include_once '../db/koneksi.php';

$id_alternatif   = $_GET ['id_alternatif'];
$sql             = "DELETE FROM moo_alternatif WHERE id_alternatif = '$id_alternatif' ";
$query           = mysqli_query($konek, $sql);
$sql1            = "DELETE FROM moo_nilai WHERE id_alternatif = '$id_alternatif' ";
mysqli_query($konek, $sql1);

if ($query) {
  echo "<script>alert('Data berhasil di hapus') </script>";
  echo "<script>window.location.href = \"metodeU.php\" </script>";
} else {
  echo "<script>alert ('Gagal Hapus')</script>";
  echo "<script>window.location.href = \"metodeU.php\" </script>";
}
 ?>
