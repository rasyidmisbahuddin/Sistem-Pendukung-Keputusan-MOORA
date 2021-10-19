<?php include_once 'atribut/head.php'; ?>

<?php
$id_pen = $_GET['id_pendidikan'];
$sql    = "SELECT * FROM kriteriapendidikan WHERE id_pendidikan = '$id_pen'";
$query  = mysqli_query($konek, $sql);
$row    = mysqli_fetch_array($query);
?>

<!-- Page Wrapper -->
<div id="wrapper">
  <!-- begin:: siderbar -->
  <?php include_once 'atribut/sidebar.php'; ?>
  <!-- end:: siderbar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
      
      <?php include_once 'atribut/navbar.php'; ?>

      <!-- begin:: content -->
      <div class="container-fluid">
        <!-- <div class="row"> -->
        <div class="col-xl-12  col-lg-8">
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h5 class="m-0 font-weight-bold text-primary"> <b> Ubah Data Kriteria Pendidikan Terakhir Orang Tua </b></h5>
            </div>
            <div class="card-body">
              <form class="form" method="post">
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Nomor</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="id_pendidikan" value="<?php echo $row['id_pendidikan']; ?>"
                      readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Pendidikan Terakhir Orang Tua</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="pendidikan" required value="<?php echo $row['pendidikan']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Nilai</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="number" name="nilai" required value="<?php echo $row['nilai']; ?>">
                  </div>
                </div>
                <!-- Button -->
                <input class="btn btn-success" type="submit" name="simpan" value="Simpan">
                <a href="data_kriteria.php">
                  <button type="button" name="button" class="btn btn-danger">Batal</button>
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- end:: content -->
    </div>
  </div>
</div>
<!-- End of Page Content -->
<!-- end -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php include_once 'atribut/foot.php'; ?>

<?php

if (isset($_POST['simpan'])) {
  $id_pendidikan     = $_POST ['id_pendidikan'];
  $pendidikan      = $_POST ['pendidikan'];
  $nilai      = $_POST ['nilai'];

  $query = "UPDATE kriteriapendidikan SET pendidikan = '$pendidikan', nilai = '$nilai' WHERE id_pendidikan = '$id_pendidikan'";
  $simpan = mysqli_query($konek, $query);
  if ($simpan === true) {
    echo "<script>alert('Kriteria Berhasil Di Ubah') </script>";
		echo "<script>window.location.href = \"data_kriteria.php\" </script>";
  }
  else {
    echo "<script>alert('Kriteria Gagal Di Ubah') </script>";
		echo "<script>window.location.href = \"data_kriteria.php\" </script>";
  }
}
 ?>