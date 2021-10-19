<?php include_once 'atribut/head.php'; ?>

<?php
$id_siswa    = $_GET['id_siswa'];
$sql        = "SELECT * FROM data_siswa WHERE id_siswa= '$id_siswa'";
$query      = mysqli_query($konek, $sql);
$row        = mysqli_fetch_array($query);
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
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                <h5 class="m-0 font-weight-bold text-primary"> <b> Ubah Data Siswa </b></h5>
              </div>
              <div class="card-body">
                <form class="form" method="post">
                  <div class="form-group ">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Nomor</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control  " type="text" name="id_siswa" value="<?php echo $row['id_siswa']; ?>" readonly="readonly">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Nomor Induk Siswa</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control" id="txtNumber" onkeypress="return isNumberKey(event)" maxlength="4" type="text" name="nis" required value="<?php echo $row['nis']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Siswa</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control" id="txtCharacter" onkeypress="return isNumericKey(event)"  type="text" name="namasiswa" required value="<?php echo $row['namasiswa']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Alamat Siswa</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control" type="text" name="alamat" required value="<?php echo $row['alamat']; ?>">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-sm-6 col-sm-6 ">
                      <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Ayah</label>
                      <div class="col">
                        <input class="form-control" type="text" id="txtCharacter" onkeypress="return isNumericKey(event)"  name="nama_ayah" required value="<?php echo $row['nama_ayah']; ?>">
                      </div>
                    </div>
                    <div class="form-group col-sm-6 col-sm-6">
                      <label class="control-label col">Pekerjaan Ayah</label>
                      <div class="col">
                        <input class="form-control" type="text" id="txtCharacter" onkeypress="return isNumericKey(event)"  name="pekerjaan_ayah" required value="<?php echo $row['pekerjaan_ayah']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-sm-6 col-sm-6 ">
                      <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Ibu</label>
                      <div class="col">
                        <input class="form-control" id="txtCharacter" onkeypress="return isNumericKey(event)"  type="text" name="nama_ibu" required value="<?php echo $row['nama_ibu']; ?>">
                      </div>
                    </div>
                    <div class="form-group col-sm-6 col-sm-6">
                      <label class="control-label col">Pekerjaan Ibu</label>
                      <div class="col">
                        <input class="form-control" id="txtCharacter" onkeypress="return isNumericKey(event)"  type="text" name="pekerjaan_ibu" required value="<?php echo $row['pekerjaan_ibu']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Penghasilan Orang Tua</label>
                    <div class="input-group-prepend col">
                      <select class="custom-select" type=text name="penghasilan" required value="<?php echo $row['penghasilan']; ?>">
                        <option selected value="<?php echo $row['penghasilan']; ?>"> Terpilih : <?php echo $row['penghasilan']; ?></option>
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
                        <input class="form-control" step=".1" min="1" type="number" name="jarak" required value="<?php echo $row['jarak']; ?>">
                        <span class="input-group-text">Kilometer</span>
                      </div>
                    </div>
                    <div class="form-group col-sm-6 col-sm-6">
                      <label class="control-label col">Tanggungan Orang Tua</label>
                      <div class="col  input-group-append">
                        <input class="form-control" step="1"  min="1" type="number" required name="tanggungan" value="<?php echo $row['tanggungan']; ?>">
                        <span class="input-group-text">Tanggungan</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-sm-6 col-sm-6">
                      <label class="control-label col">Rata-Rata nilai rapot</label>
                      <div class="col">
                        <input class="form-control" step="1"  min="1" max="100" type="number" name="ratanilai" required value="<?php echo $row['ratanilai']; ?>">
                      </div>
                    </div>
                    <div class="form-group col-sm-6 col-sm-6">
                      <label class="control-label col">Absensi Kehadiran Siswa</label>
                      <div class="col input-group-prepend">
                        <input class="form-control" step="1"  type="number" min="1" max="100" required name="kehadiran" value="<?php echo $row['kehadiran']; ?>">
                        <span class="input-group-text">%</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Pendidikan Terakhir Orang Tua</label>
                    <div class="input-group-prepend col">
                      <select class="custom-select" type=text name="pendidikan" required value="<?php echo $row['pendidikan']; ?>">
                      <option value="<?php echo $row['pendidikan']; ?>"><?php echo $row['pendidikan']; ?></option>
                        <option selected><?php echo $row['pendidikan']; ?></option>
                        <option value="SARJANA">SARJANA</option>
                        <option value="DIPLOMA">DIPLOMA</option>
                        <option value="SMA">SMA</option>
                        <option value="SMP">SMP</option>
                        <option value="SD">SD</option>
                      </select>
                    </div>
                  </div>



                  <br>

                  <!-- Button -->
                  <div class="container">
                    <div class="col text-center mt-3 mb-3">
                      <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                      <a href="data_siswa.php">
                        <button type="button" name="button" class="btn btn-danger">Batal</button>
                      </a>




                      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

                      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




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


</body>

</html>

<?php
//proses Input
if (isset($_POST['simpan'])) {
  $id_siswa    = $_POST['id_siswa'];
  $namasiswa = $_POST['namasiswa'];
  $penghasilan      = $_POST['penghasilan'];
  $jarak  = $_POST['jarak'];
  $tanggungan    = $_POST['tanggungan'];
  $ratanilai = $_POST['ratanilai'];
  $pendidikan    = $_POST['pendidikan'];
  $nis              = $_POST['nis'];
  $nama_ayah           = $_POST['nama_ayah'];
  $nama_ibu          = $_POST['nama_ibu'];
  $pekerjaan_ayah       = $_POST['pekerjaan_ayah'];
  $pekerjaan_ibu     = $_POST['pekerjaan_ibu'];
  $alamat           = $_POST['alamat'];
  $kehadiran         = $_POST['kehadiran'];

  $query = "UPDATE data_siswa SET namasiswa = '$namasiswa', penghasilan = '$penghasilan', jarak = '$jarak', tanggungan = '$tanggungan', ratanilai = '$ratanilai', kehadiran = '$kehadiran', pendidikan = '$pendidikan', 
  nis = '$nis', nama_ayah = '$nama_ayah', nama_ibu = '$nama_ibu', pekerjaan_ayah = '$pekerjaan_ayah', pekerjaan_ibu = '$pekerjaan_ibu', alamat = '$alamat' WHERE id_siswa = '$id_siswa'";
  $simpan = $konek->query($query);
  if ($simpan === true) {
    echo "<script>alert('Data Berhasil Di Ubah') </script>";
    echo "<script>window.location.href = \"data_siswa.php\" </script>";
  } else {
    echo "<script>alert('Data Gagal Di Ubah') </script>";
    echo "<script>window.location.href = \"data_siswa.php\" </script>";
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