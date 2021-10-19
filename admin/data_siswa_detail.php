<?php include_once 'atribut/head.php'; ?>
<?php


$id_siswa = $_GET['id_siswa'];
$sql     = "SELECT * FROM data_siswa WHERE id_siswa= '$id_siswa'";
$query   = mysqli_query($konek, $sql);
$row     = mysqli_fetch_array($query);
?>

<!-- Page Wrapper -->
<div id="wrapper">
  <!-- begin:: siderbar -->
  <?php include_once 'atribut/sidebar.php'; ?>
  <!-- end:: siderbar -->

  <div id="content-wrapper" class="d-flex flex-column">
    <!-- begin:: main content -->
    <div id="content">

      <?php include_once 'atribut/navbar.php'; ?>

      <!-- begin:: content -->
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-lg-10 col-xl-10">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col">
                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Detail Siswa </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-outline-dark font-weight-bold" href="data_siswa.php"><span class="icon "><i class="fas fa-arrow-left mr-lg-2"></i>Kembali</a>
                 
                    <a class="btn btn-outline-primary font-weight-bold" href="data_siswa_ubah.php?id_siswa=<?php echo $row['id_siswa'] ?>"><span class="icon ">
                              <i class="fas fa-edit mr-lg-2"></i>
                            </span>Ubah Data Siswa</a>

                  </div>

                </div>
              </div>
              <div class="card-body" style="background-color: #ecf0f1;">
                <div class=" ml-4">
                  <div class="col  ">
                    <div class=" mt-md-4 mb-4">
                      <h5>Nomor Urut</h5>
                      <?= $row['id_siswa'] ?>
                      <div class=" mt-md-4 mb-4">
                        <h5>Nomor Induk Siswa</h5>
                        <?= $row['nis'] ?>
                      </div>
                      <div class=" mt-md-4 mb-4">
                        <h5>Nama Lengkap Siswa</h5>
                        <?= $row['namasiswa'] ?>
                      </div>
                      <div class=" mt-md-4 mb-4">
                        <h5>Alamat Lengkap Siswa</h5>
                        <?= ($row['alamat']) ?>
                      </div>
                      <div class=" mt-md-4 mb-4">
                        <h5>Penghasilan Orang Tua</h5>
                        <?php echo ($row['penghasilan']) ?> / Bulan
                      </div>
                      <div class=" mt-md-4 mb-4">
                        <h5>Pekerjaan Ayah</h5>
                        <?= ($row['pekerjaan_ayah']) ?>
                        <div class=" mt-md-4 mb-4">
                          <h5>Pekerjaan Ibu</h5>
                          <?= ($row['pekerjaan_ibu']) ?>
                          <div class=" mt-md-4 mb-4">
                            <h5>Jarak yang ditempuh untuk kesekolah</h5>
                            <?= $row['jarak'] ?> Kilometer
                          </div>
                          <div class=" mt-md-4 mb-4">
                            <h5>Nama Ayah</h5>
                            <?= $row['nama_ayah'] ?>
                          </div>
                          <div class=" mt-md-4 mb-4">
                            <h5>Nama Ibu</h5>
                            <?= $row['nama_ibu'] ?>
                          </div>
                          <div class=" mt-md-4 mb-4">
                            <h5>Jumlah Tanggungan</h5>
                            <?= $row['tanggungan'] ?> Tanggungan
                          </div>
                          <div class=" mt-md-4 mb-4">
                            <h5>Pendidikan Terakhir Orang Tua</h5>
                            <?= $row['pendidikan'] ?>
                          </div>
                          <div class=" mt-md-4 mb-4">
                            <h5>Nilai Rata-Rata Rapot</h5>
                            <?= $row['ratanilai'] ?>
                          </div>
                          <div class=" mt-md-4 mb-4">
                            <h5>Persentase Kehadiran Siswa</h5>
                            <?= $row['kehadiran'] ?>%
                          </div>
                          <!-- <h2>Pictures</h2> -->


                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- end:: content -->
          </div>
          <!-- end:: main content -->
        </div>
      </div>
      <!-- End of Page Content -->

      <!-- end -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <?php include_once 'atribut/foot.php'; ?>