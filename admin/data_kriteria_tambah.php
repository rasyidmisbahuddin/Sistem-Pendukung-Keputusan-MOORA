<?php include_once 'atribut/head.php'; ?>

<?php
$sql    = "SELECT id_kriteria FROM moo_kriteria";
$carkod = mysqli_query($konek, $sql);
$datkod = mysqli_fetch_array($carkod, MYSQLI_ASSOC);
$jumdat = mysqli_num_rows($carkod);
if ($datkod) {

  $kode    = $jumdat + 1;
  $kodeoto = $kode;
} else {
  $kodeoto = "1";
}
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
              <h5 class="m-0 font-weight-bold text-primary"> <b> Tambah Kriteria kode Orang Tua </b></h5>
            </div>
            <div class="card-body">
              <form class="form" method="post">
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">No</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="id_kriteria" value="<?= $kodeoto ?>" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Kode </label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="kode" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Kriteria </label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="kriteria" required>
                  </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Tipe Kriteria</label>
                    <div class="input-group-prepend col">
                      <select class="custom-select" type=text name="type" required value="<?php echo $row['type']; ?>">
                        <option selected>-----Pilih Tipe Kriteria----</option>
                        <option value="Cost">Cost</option>
                        <option value="Benefit">Benefit</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Bobot </label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="number" name="bobot" required>
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
if (isset($_POST['simpan'])) {
  $id_kriteria   = $_POST ['id_kriteria'];
  $kode      = $_POST ['kode'];
  $kriteria      = $_POST ['kriteria'];
  $type     = $_POST ['type'];
  $bobot      = $_POST ['bobot'];

  $query = "INSERT INTO moo_kriteria (id_kriteria, kode, kriteria, type, bobot) VALUES ('$id_kriteria','$kode','$kriteria','$type','$bobot')";
  $tambah = mysqli_query($konek, $query);
  if ($tambah === true) {
    echo "<script>alert('Kriteria Berhasil Di Tambah') </script>";
		echo "<script>window.location.href = \"data_kriteria.php\" </script>";
  }
  else {
    echo "<script>alert('Kriteria Gagal Di Tambah') </script>";
		echo "<script>window.location.href = \"data_kriteria.php\" </script>";
  }
}
 ?>