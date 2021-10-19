<?php include_once 'atribut/head.php'; ?>

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
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Perhitungan dengan metode MOORA </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <form method="post">
                      <input type="submit" name="kosongkan" value="Kosongkan Tabel" class="btn btn-danger shadow rounded mr-1">
                      <input type="submit" name="proses" value="Hitung!" class="btn btn-primary shadow rounded mr-1">
                      <a class="btn btn-dark rounded shadow" href="perangkingan.php">
                              <i class="fas fa-trophy mr-lg-2"></i>Perangkingan</a>
                    </form>
                    
                  </div>
                </div>
              </div>

              <?php include_once 'metode_hasil.php'; ?>

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

<?php
if (isset($_POST['proses'])) {

  $sql    = "SELECT * FROM kriteriapenghasilan";
  $sql    = "SELECT * FROM data_siswa ORDER BY ABS(jarak - '$jarak') AND ABS(ratanilai - '$ratanilai') AND ABS(penghasilan - '$penghasilan') AND ABS(tanggungan - '$tanggungan') AND ABS(pendidikan - '$pendidikan') AND ABS(kehadiran - '$kehadiran') LIMIT 100";
  $result = $konek->query($sql);
  $no     = 1;

  $data_post = [];
  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $data_post[] = array(
      'id_alternatif' => $row['id_siswa'],
      'id_siswa'     => $row['id_siswa'],
      'alternatif'   => $row['namasiswa'],
      'jarak'        => $row['jarak'],
      'ratanilai'    => $row['ratanilai'],
      'penghasilan'  => $row['penghasilan'],
      'tanggungan'   => $row['tanggungan'],
      'pendidikan'   => $row['pendidikan'],
      'kehadiran'    => $row['kehadiran']
    );
  }

  $query_k = $konek->query('SELECT * FROM moo_kriteria');
  $id_kriteria = [];
  while ($row_k = $query_k->fetch_array(MYSQLI_ASSOC)) {
    $id_kriteria[] = $row_k['id_kriteria'];
  }

  foreach ($data_post as $key => $value) {

    if ($value['jarak'] <= 3) {
      $jarak_hasil = 10;
    } else if ($value['jarak'] <= 5) {
      $jarak_hasil = 20;
    } else if ($value['jarak'] <= 10) {
      $jarak_hasil = 30;
    } else if ($value['jarak'] <= 100) {
      $jarak_hasil = 40;
    } else {
      $jarak_hasil = 10;
    }

    if ($value['penghasilan'] === 'Rp 50.000 - Rp 1.000.000') {
      $penghasilan_hasil = 10;
    } else if ($value['penghasilan'] === 'Rp 1.000.000 - Rp 2.000.000') {
      $penghasilan_hasil = 20;
    } else if ($value['penghasilan'] === 'Rp 2.000.000 - Rp 4.000.000') {
      $penghasilan_hasil = 30;
    } else if ($value['penghasilan'] === 'Lebih dari Rp 4.000.000') {
      $penghasilan_hasil = 40;
    } else {
      $penghasilan_hasil = 10;
    }

    if ($value['tanggungan'] <= 2) {
      $tanggungan_hasil = 10;
    } else if ($value['tanggungan'] <= 4) {
      $tanggungan_hasil = 20;
    } else if ($value['tanggungan'] <= 6) {
      $tanggungan_hasil = 30;
    } else if ($value['tanggungan'] <= 9) {
      $tanggungan_hasil = 40;
    } else {
      $tanggungan_hasil = 40;
    }

    if ($value['pendidikan'] === 'SARJANA') {
      $pendidikan_hasil = 50;
    } else if ($value['pendidikan'] === 'DIPLOMA') {
      $pendidikan_hasil = 40;
    } else if ($value['pendidikan'] === 'SMA') {
      $pendidikan_hasil = 30;
    } else if ($value['pendidikan'] === 'SMP') {
      $pendidikan_hasil = 20;
    } else if ($value['pendidikan'] === 'SD') {
      $pendidikan_hasil = 10;
    } else {
      $pendidikan_hasil = 10;
    }

    if ($value['kehadiran'] <= 60) {
      $kehadiran_hasil = 10;
    } else if ($value['kehadiran'] <= 69) {
      $kehadiran_hasil = 10;
    } else if ($value['kehadiran'] <= 89) {
      $kehadiran_hasil = 20;
    } else if ($value['kehadiran'] <= 100) {
      $kehadiran_hasil = 30;
    } else {
      $kehadiran_hasil = 30;
    }

    if ($value['ratanilai'] <= 59) {
      $ratanilai_hasil = 10;
    } else if ($value['ratanilai'] <= 60) {
      $ratanilai_hasil = 10;
    } else if ($value['ratanilai'] <= 80) {
      $ratanilai_hasil = 20;
    } else if ($value['ratanilai'] <= 90) {
      $ratanilai_hasil = 30;
    } else if ($value['ratanilai'] <= 100) {
      $ratanilai_hasil = 40;
    } else {
      $ratanilai_hasil = 40;
    }

    $nilai = array(
      $penghasilan_hasil,
      $jarak_hasil,
      $tanggungan_hasil,
      $pendidikan_hasil,
      $ratanilai_hasil,
      $kehadiran_hasil
    );

    $sql = "INSERT INTO moo_alternatif (id_alternatif, id_siswa, alternatif, jarak, ratanilai, penghasilan, tanggungan, pendidikan, kehadiran) VALUES ('$value[id_alternatif]', '$value[id_siswa]', '$value[alternatif]', '$value[jarak]', '$value[ratanilai]', 
    '$value[penghasilan]', '$value[tanggungan]', '$value[pendidikan]', '$value[kehadiran]')";
    $konek->query($sql);

    for ($i = 0; $i < count($id_kriteria); $i++) {
      $sql = "INSERT INTO moo_nilai (id_alternatif, id_kriteria, nilai) VALUES ('$value[id_alternatif]','$id_kriteria[$i]','$nilai[$i]')";
      $query = $konek->query($sql);
    }
  }

  if ($query) {
    echo "<script>alert('Berhasil !');</script>";
    echo "<script>window.location.href = \"metode_proses.php\"</script>";
  } else {
    echo "<script>alert('Gagal !');</script>";
  }
} else if (isset($_POST['kosongkan'])) {

  $sql_k_moo_alternatif = "TRUNCATE TABLE moo_alternatif";
  $konek->query($sql_k_moo_alternatif);
  $sql_k_moo_nilai = "TRUNCATE TABLE moo_nilai";
  $konek->query($sql_k_moo_nilai);

  echo "<script>alert('Berhasil mengosongkan tabel!')</script>";
  echo "<script>window.location.href = \"metode_proses.php\"</script>";
}
?>