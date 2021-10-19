<?php include_once 'atribut/head.php'; ?>

<?php
$sql    = "SELECT MAX(id_siswa) AS maxid FROM data_siswa";
$carkod = mysqli_query($konek, $sql);
$datkod = mysqli_fetch_array($carkod, MYSQLI_ASSOC);
if ($datkod) {
  $nilkod  = $datkod['maxid'];
  $kode    = $nilkod + 1;
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
      <div class="col">
        <div class="container">
          <!-- <div class="row"> -->
          <div class="col-xl-12  col-lg-8">
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-primary"> <b> Tambah Siswa </b></h5>
              </div>
              <div class="card-body">
                <form class="form" method="post">
                  <div class="form-group ">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Nomor</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control" type="text" name="id_siswa" value="<?= $kodeoto ?>" readonly="readonly">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Nomor Induk Siswa</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input id="txtNumber" onkeypress="return isNumberKey(event)" maxlength="4" class="form-control" type="text"  name="nis" required  >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Siswa</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control" id="txtCharacter" onkeypress="return isNumericKey(event)" type="text" name="namasiswa"   required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Alamat Siswa</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <textarea class="form-control" style="resize:none" name="alamat" type="text " required> </textarea>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-sm-6 col-sm-6 ">
                      <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Ayah</label>
                      <div class="col">
                        <input class="form-control" id="txtCharacter" type="text" onkeypress="return isNumericKey(event)" name="nama_ayah" required>
                      </div>
                    </div>
                    <div class="form-group col-sm-6 col-sm-6">
                      <label class="control-label col">Pekerjaan Ayah</label>
                      <div class="col">
                        <input class="form-control"  id="txtCharacter" type="text" onkeypress="return isNumericKey(event)" name="pekerjaan_ayah" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-sm-6 col-sm-6 ">
                      <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Ibu</label>
                      <div class="col">
                        <input class="form-control"  id="txtCharacter" onkeypress="return isNumericKey(event)" type="text" name="nama_ibu" required>
                      </div>
                    </div>
                    <div class="form-group col-sm-6 col-sm-6">
                      <label class="control-label col">Pekerjaan Ibu</label>
                      <div class="col">
                        <input class="form-control"  id="txtCharacter" onkeypress="return isNumericKey(event)" type="text" name="pekerjaan_ibu" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Penghasilan Orang Tua</label>
                    <div class="input-group-prepend col">
                      <select class="custom-select" type=text name="penghasilan" required>
                      <option selected> ---Pilih Penghasilan Orang Tua--- </option>
                        <option value="Lebih dari Rp 4.000.000">Lebih dari Rp 4.000.000</option>
                        <option value="Rp 2.000.000 - Rp 4.000.000">Rp 2.000.000 - Rp 4.000.000</option>
                        <option value="Rp 1.000.000 - Rp 2.000.000">Rp 1.000.000 - Rp 2.000.000</option>
                        <option value="Rp 50.000 - Rp 1.000.000">Rp 50.000 - Rp 1.000.000</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-sm-6 col-sm-6">
                      <label class="control-label col">Jarak yang ditempuh untuk kesekolah</label>
                      <div class="col input-group-append">
                        <input class="form-control" step=".1" min="1" type="number" name="jarak" required>
                        <span class="input-group-text">Kilometer</span>
                      </div>
                    </div>
                    <div class="form-group col-sm-6 col-sm-6">
                      <label class="control-label col">Tanggungan Orang Tua</label>
                      <div class="col  input-group-append">
                        <input class="form-control" type="number" min="1" step="1" name="tanggungan" required>
                        <span class="input-group-text">Tanggungan</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-sm-6 col-sm-6">
                      <label class="control-label col">Rata-Rata nilai rapot</label>
                      <div class="col">
                        <input class="form-control" type="number" step="1" min="1" max="100" name="ratanilai" required>
                      </div>
                    </div>
                    <div class="form-group col-sm-6 col-sm-6">
                      <label class="control-label col">Absensi Kehadiran Siswa</label>
                      <div class="col input-group-prepend">
                        <input class="form-control" type="number" step="1" min="1" max="100" required name="kehadiran">
                        <span class="input-group-text">%</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Pendidikan Terakhir Orang Tua</label>
                    <div class="input-group-prepend col">
                      <select class="custom-select" type=text name="pendidikan" required>
                      <option selected> ---Pilih Pendidikan Terakhir Orang Tua--- </option>
                        <option value="SARJANA">SARJANA</option>
                        <option value="DIPLOMA">DIPLOMA</option>
                        <option value="SMA">SMA</option>
                        <option value="SMP">SMP</option>
                        <option value="SD">SD</option>
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="col text-center mt-3 mb-3">
                    <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                    <a href="data_siswa.php" class="btn btn-danger">Batal</a>
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


</body>

</html>

<?php
if (isset($_POST['simpan'])) {

  $id_siswa         = $_POST['id_siswa'];
  $namasiswa        = $_POST['namasiswa'];
  $penghasilan      = $_POST['penghasilan'];
  $jarak            = $_POST['jarak'];
  $tanggungan       = $_POST['tanggungan'];
  $ratanilai         = $_POST['ratanilai'];
  $pendidikan        = $_POST['pendidikan'];
  $nis              = $_POST['nis'];
  $nama_ayah           = $_POST['nama_ayah'];
  $nama_ibu          = $_POST['nama_ibu'];
  $pekerjaan_ayah       = $_POST['pekerjaan_ayah'];
  $pekerjaan_ibu     = $_POST['pekerjaan_ibu'];
  $alamat           = $_POST['alamat'];
  $kehadiran         = $_POST['kehadiran'];

  $sql_siswa   = "SELECT * FROM data_siswa WHERE namasiswa = '$namasiswa'";
  $query_siswa = $konek->query($sql_siswa);
  $cek_siswa   = $query_siswa->num_rows;

  if ($cek_siswa > 0) {
    echo "<script>alert('Data Sudah Ada!') </script>";
    echo "<script>window.location.href = \"data_siswa_tambah.php\" </script>";
  } else {
    $query  = "INSERT INTO data_siswa (id_siswa, namasiswa, penghasilan, jarak, tanggungan, ratanilai, pendidikan, nis, nama_ayah, nama_ibu, pekerjaan_ayah, pekerjaan_ibu, alamat, kehadiran) 
    VALUES ('$id_siswa', '$namasiswa','$penghasilan','$jarak','$tanggungan','$ratanilai', '$pendidikan', '$nis', '$nama_ayah', '$nama_ibu', '$pekerjaan_ayah', '$pekerjaan_ibu', '$alamat', '$kehadiran')";
    $tambah = $konek->query($query);
    if ($tambah == true) {
      echo "<script>alert('Data Berhasil Di Tambah') </script>";
      echo "<script>window.location.href = \"data_siswa.php\" </script>";
    } else {
      echo "<script>alert('Data Gagal Di Tambah') </script>";
      echo "<script>window.location.href = \"data_siswa.php\" </script>";
    }
  }
}

?>

<script>
function isNumberKey(evt)
			{
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode != 46 && charCode > 31 
				&& (charCode < 48 || charCode > 57))
				return false;
				return true;
			}  
			
			
			function isNumericKey(evt)
			{
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode != 46 && charCode > 31 
				&& (charCode < 48 || charCode > 57))
				return true;
				return false;
			}
</script>