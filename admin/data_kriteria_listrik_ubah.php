<?php include_once 'atribut/head.php'; ?>

<?php
$idlistrik = $_GET['id_tanggungan'];
$sql       = "SELECT * FROM kriteriatanggungan WHERE id_tanggungan = '$idlistrik'";
$query     = mysqli_query($konek, $sql);
$row       = mysqli_fetch_array($query);
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

      <!-- Begin Page Content -->
      <div class="container-fluid">
        <!-- <div class="row"> -->
        <div class="col-xl-12  col-lg-8">
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h5 class="m-0 font-weight-bold text-primary"> <b> Ubah Data Kriteria Tanggungan Orang Tua </b></h5>
            </div>
            <div class="card-body">
              <form class="form" method="post">
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Nomor</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="idlistrik" value="<?php echo $row['id_tanggungan']; ?>"
                      readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Jumlah Tanggungan Orang Tua</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="number" name="tanggungan" value="<?php echo $row['tanggungan']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Nilai</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="number" name="nilai" value="<?php echo $row['nilai']; ?>">
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
include ("../koneksi.php");
//proses Input
if (isset($_POST['simpan'])) {
  $idlistrik     = $_POST['idlistrik'];
  $tanggungan       = $_POST['tanggungan'];
  $bilfuzzy      = $_POST['bilfuzzy'];
  $nilai         = $_POST['nilai'];

  $query = "UPDATE kriteriatanggungan SET tanggungan = '$tanggungan', bilanganfuzzy = '$bilfuzzy', nilai = '$nilai' WHERE id_tanggungan = '$idlistrik'";
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