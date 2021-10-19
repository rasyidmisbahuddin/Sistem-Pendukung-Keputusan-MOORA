<?php include_once 'atribut/head.php'; ?>

<link rel="stylesheet" type="text/css" href="../assets/datatables/dataTables.bootstrap4.min.css">

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
        <div class="row">
          <div class="col-lg-12 col-xl-12 ">
            <div class="card mb-4 shadow ">
              <div class="card-header">
                <div class="row">
                  <div class="col">
                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Jenis Dan Bobot Kriteria </b></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0" id="dataTable">
                  <thead align="center" class="thead-dark">
                    <!-- <th>Nomor</th> -->
                    <th> Kode </th>
                    <th> Kriteria </th>
                    <th> Type </th>
                    <th> Bobot </th>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT * FROM moo_kriteria";
                    $result = $konek->query($query);

                    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    ?>
                      <tr>
                        <td align="center"><?php echo $row['kode']; ?></td>
                        <td align="center"><?php echo $row['kriteria']; ?></td>
                        <td align="center"><?php echo $row['type']; ?></td>
                        <td align="center"><?php echo $row['bobot']; ?>%</td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-xl-12">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col">
                        <h5 class="mt-2 font-weight-bold text-dark text-primary text-center"> <b> Nilai Sub-kriteria </b></h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-xl-6">
                <div class="card shadow mb-4">
                  <div class="card-header ">
                    <div class="row">
                      <div class="col">
                        <h5 class="mt-2 font-weight-bold text-primary"> <b>Nilai Untuk Kriteria Penghasilan Orang Tua </b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> Penghasilan Perbulan </th>
                        <th> Nilai </th>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM kriteriapenghasilanortu";
                        $result = $konek->query($query);

                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                          <tr>
                            <td align="center"><?php echo $row['id_penghasilan']; ?></td>
                            <td align="center"><?php echo $row['penghasilan']; ?></td>
                            <td align="center"><?php echo $row['nilai']; ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-xl-6">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col">
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> Nilai Untuk Kriteria Jarak yang Ditempuh Siswa </b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> Jarak </th>
                        <th> Nilai </th>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM kriteriajarak";
                        $result = $konek->query($query);

                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                          <tr>
                            <td align="center"><?php echo $row['id_jarak']; ?> </td>
                            <td align="center"><?php echo $row['jarak']; ?> KM</td>
                            <td align="center"><?php echo $row['nilai']; ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-6">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col">
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> Nilai Untuk Kriteria Jumlah Tanggungan Orang Tua </b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> Tanggungan </th>
                        <th> Nilai </th>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM kriteriatanggungan";
                        $result = $konek->query($query);

                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                          <tr>
                            <td align="center"><?php echo $row['id_tanggungan']; ?> </td>
                            <td align="center"><?php echo $row['tanggungan']; ?> Tanggungan</td>
                            <td align="center"><?php echo $row['nilai']; ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-6">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col">
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> Nilai Untuk Kriteria Rata-Rata Nilai Siswa </b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> Nilai Rata-Rata</th>
                        <th> Nilai </th>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM kriteriaratanilai";
                        $result = $konek->query($query);

                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                          <tr>
                            <td align="center"><?php echo $row['id_ratanilai']; ?></td>
                            <td align="center"><?php echo $row['ratanilai']; ?></td>
                            <td align="center"><?php echo $row['nilai']; ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-6">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col">
                        <h5 class="mt-2 font-weight-bold text-primary"> <b>Nilai Untuk Kriteria Kehadiran Siswa </b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> Kehadiran</th>
                        <th> Nilai </th>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM kriteriakehadiran";
                        $result = $konek->query($query);

                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                          <tr>
                            <td align="center"><?php echo $row['id_kehadiran']; ?></td>
                            <td align="center"><?php echo $row['kehadiran']; ?>%</td>
                            <td align="center"><?php echo $row['nilai']; ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col">
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> Nilai Untuk Kriteria Pendidikan Terakhir Orang Tua </b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm " width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <th> No </th>
                        <th> Pendidikan Terakhir Orang Tua </th>
                        <th> Nilai </th>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM kriteriapendidikan";
                        $result = $konek->query($query);
                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                          <tr>
                            <td align="center"><?php echo $row['id_pendidikan']; ?></td>
                            <td align="center"><?php echo $row['pendidikan']; ?></td>
                            <td align="center"><?php echo $row['nilai']; ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
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
<script src="../assets/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/datatables/dataTables.bootstrap4.js"></script>