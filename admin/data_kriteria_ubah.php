<?php include_once 'atribut/head.php'; ?>

<?php
$id_kriteria = $_GET['id_kriteria'];
$sql    = "SELECT * FROM moo_kriteria WHERE id_kriteria= '$id_kriteria'";
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
      <div class="col">
        <div class="container">
          <!-- <div class="row"> -->

          <div class="col-xl-12  col-lg-8">
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
              <h5 class="m-0 font-weight-bold text-primary"> <b> Ubah Data Kriteria </b></h5>
            </div>
            <div class="card-body">
              <form class="form" method="post">
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">No</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="id_kriteria" value="<?php echo $row['id_kriteria']; ?>"
                      readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Kriteria</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="kriteria" value="<?php echo $row['kriteria']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Kode</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="kode" value="<?php echo $row['kode']; ?>">
                  </div>
                </div>
                <div class="form-row">
                <div class="form-group col-sm-6 col-sm-6">
                  <label class="control-label col">Tipe</label>
                  <div class="input-group-prepend col">
                  <select class="custom-select" type=text name="type" value="<?php echo $row['type']; ?>">
                  <option selected value="<?php echo $row['type']; ?>"> Terpilih : <?php echo $row['type']; ?></option>
                        <option value="Benefit">Benefit</option>
                        <option value="Cost">Cost</option>
                        </select>
                  </div>
                </div>
                <div class="form-group col-sm-6 col-sm-6">
                  <label class="control-label col">Bobot</label>
                  <div class="col input-group-append">
                
                    <input class="form-control" type="number" step="1" min="1" max="100" name="bobot" value="<?php echo $row['bobot']; ?>" required>
                    <span class="input-group-text">%</span>
                  </div>
                </div>
                <div class="col text-center mt-3 mb-3">
                <!-- Button -->
                <input class="btn btn-success text-center shadow mt-4" type="submit" name="simpan" value="Simpan">
                <a href="data_kriteria.php">
                  <button type="button" name="button" class="btn text-center btn-danger shadow mt-4">Batal</button>
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
  $id_kriteria   = $_POST ['id_kriteria'];
  $kode      = $_POST ['kode'];
  $kriteria      = $_POST ['kriteria'];
  $type     = $_POST ['type'];
  $bobot      = $_POST ['bobot'];

  $query = "UPDATE moo_kriteria SET kode = '$kode', kriteria = '$kriteria', type = '$type', bobot = '$bobot' WHERE id_kriteria = '$id_kriteria'";
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