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
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-xl-12">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col">
                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Nilai kriteria </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-primary shadow" href="data_kriteria_tambah.php">
                      <span class="icon ">
                        <i class="fas fa-book mr-lg-2"></i>
                      </span>Tambah Kriteria</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table shadow table-bordered table table-striped table table-hover table-sm " width="100%" cellspacing="0">
                  <thead align="center" class="thead-dark">
                    <th> Kode </th>
                    <th> Kriteria </th>
                    <th> Type </th>
                    <th> Bobot </th>
                    <th> Aksi </th>
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
                        <td align="center" style="width: 15.66%">
                          <a class="btn btn-outline-primary btn-sm border-0" href="data_kriteria_ubah.php?id_kriteria=<?php echo $row['id_kriteria'] ?>">
                            <span class="icon">
                              <i class="fas fa-edit mr-2"></i>
                            </span>
                            Ubah
                            </button>
                            <a class="btn btn-outline-danger btn-sm border-0" href="data_kriteria_hapus.php?id_kriteria=<?php echo $row['id_kriteria'] ?>">
                              <span class="icon">
                                <i class="fas fa-trash"></i>
                              </span>
                              Hapus
                            </a>
                        </td>
                      </tr>
                    <?php } ?>
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
                      <div class="col-lg-6 col-xl-12">
                        <h5 class="mt-2 font-weight-bold text-primary"> <b>
                            <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 1";
                            $result = $konek->query($query);
                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                              $meaning = $row["kriteria"];
                              echo $meaning;
                            } ?>
                          </b></h5>
                        <div class=" mt-2 col-lg-12 col-xl-12" style="text-align: right;">
                          <a class="btn btn-primary shadow" href="data_kriteria_penghasilan_tambah.php">
                            <span class="icon ">
                              <i class="fas fa-plus mr-lg-2"></i>
                            </span>Tambah</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 1";
                              $result = $konek->query($query);
                              while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                $meaning = $row["kriteria"];
                                echo $meaning;
                              } ?> </th>
                        <th> Nilai </th>
                        <th> Aksi </th>
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
                            <td align="center">
                              <a class="btn btn-outline-primary border-0 btn-sm" href="data_kriteria_penghasilan_ubah.php?id_penghasilan=<?php echo $row['id_penghasilan'] ?>">
                                <span class="icon">
                                  <i class="fas fa-edit"></i>
                                </span>
                              </a>
                              <a class="btn btn-outline-danger btn-sm border-0 btn-sm" href="data_kriteria_penghasilan_hapus.php?id_penghasilan=<?php echo $row['id_penghasilan'] ?>">
                                <span class="icon">
                                  <i class="fas fa-trash"></i>
                                </span>
                              </a>
                            </td>
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
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 2";
                                                                            $result = $konek->query($query);
                                                                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                                                              $meaning = $row["kriteria"];
                                                                              echo $meaning;
                                                                            } ?> </b></h5>
                        <div class=" mt-2 col-lg-12 col-xl-12" style="text-align: right;">
                          <a class="btn btn-primary shadow" href="data_kriteria_jarak_tambah.php">
                            <span class="icon ">
                              <i class="fas fa-plus mr-lg-2"></i>
                            </span>Tambah</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 2";
                              $result = $konek->query($query);
                              while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                $meaning = $row["kriteria"];
                                echo $meaning;
                              } ?> </th>
                        <th> Nilai </th>
                        <th> Aksi </th>
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
                            <td align="center">
                              <a class="btn btn-outline-primary border-0 btn-sm" href="data_kriteria_jarak_ubah.php?id_jarak=<?php echo $row['id_jarak'] ?>">
                                <span class="icon">
                                  <i class="fas fa-edit"></i>
                                </span>
                              </a>
                              <a class="btn btn-outline-danger btn-sm border-0 btn-sm" href="data_kriteria_jarak_hapus.php?id_jarak=<?php echo $row['id_jarak'] ?>">
                                <span class="icon">
                                  <i class="fas fa-trash"></i>
                                </span>
                              </a>
                            </td>
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
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 3";
                                                                            $result = $konek->query($query);
                                                                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                                                              $meaning = $row["kriteria"];
                                                                              echo $meaning;
                                                                            } ?> </b></h5>
                        <div class=" mt-2 col-lg-12 col-xl-12" style="text-align: right;">
                          <a class="btn btn-primary shadow" href="data_kriteria_tanggungan_tambah.php">
                            <span class="icon ">
                              <i class="fas fa-plus mr-lg-2"></i>
                            </span>Tambah</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 3";
                              $result = $konek->query($query);
                              while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                $meaning = $row["kriteria"];
                                echo $meaning;
                              } ?> </th>
                        <th> Nilai </th>
                        <th> Aksi </th>
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
                            <td align="center">
                              <a class="btn btn-outline-primary border-0 btn-sm" href="data_kriteria_tanggungan_ubah.php?id_tanggungan=<?php echo $row['id_tanggungan'] ?>">
                                <span class="icon">
                                  <i class="fas fa-edit"></i>
                                </span>
                              </a>
                              <a class="btn btn-outline-danger btn-sm border-0 btn-sm" href="data_kriteria_tanggungan_hapus.php?id_tanggungan=<?php echo $row['id_tanggungan'] ?>">
                                <span class="icon">
                                  <i class="fas fa-trash"></i>
                                </span>
                              </a>
                            </td>
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
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 5";
                                                                            $result = $konek->query($query);
                                                                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                                                              $meaning = $row["kriteria"];
                                                                              echo $meaning;
                                                                            } ?> </b></h5>
                        <div class=" mt-2 col-lg-12 col-xl-12" style="text-align: right;">
                          <a class="btn btn-primary shadow" href="data_kriteria_ratanilai_tambah.php">
                            <span class="icon ">
                              <i class="fas fa-plus mr-lg-2"></i>
                            </span>Tambah</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 5";
                              $result = $konek->query($query);
                              while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                $meaning = $row["kriteria"];
                                echo $meaning;
                              } ?></th>
                        <th> Nilai </th>
                        <th> Aksi </th>
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
                            <td align="center">
                              <a class="btn btn-outline-primary border-0 btn-sm" href="data_kriteria_ratanilai_ubah.php?id_ratanilai=<?php echo $row['id_ratanilai'] ?>">
                                <span class="icon">
                                  <i class="fas fa-edit"></i>
                                </span>
                              </a>
                              <a class="btn btn-outline-danger btn-sm border-0 btn-sm" href="data_kriteria_ratanilai_hapus.php?id_ratanilai=<?php echo $row['id_ratanilai'] ?>">
                                <span class="icon">
                                  <i class="fas fa-trash"></i>
                                </span>
                              </a>
                            </td>
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
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 6";
                                                                            $result = $konek->query($query);
                                                                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                                                              $meaning = $row["kriteria"];
                                                                              echo $meaning;
                                                                            } ?> </b></h5>
                        <div class=" mt-2 col-lg-12 col-xl-12" style="text-align: right;">
                          <a class="btn btn-primary shadow" href="data_kriteria_kehadiran_tambah.php">
                            <span class="icon ">
                              <i class="fas fa-plus mr-lg-2"></i>
                            </span>Tambah</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 6";
                              $result = $konek->query($query);
                              while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                $meaning = $row["kriteria"];
                                echo $meaning;
                              } ?></th>
                        <th> Nilai </th>
                        <th> Aksi </th>
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
                            <td align="center">
                              <a class="btn btn-outline-primary border-0 btn-sm" href="data_kriteria_kehadiran_ubah.php?id_kehadiran=<?php echo $row['id_kehadiran'] ?>">
                                <span class="icon">
                                  <i class="fas fa-edit"></i>
                                </span>
                              </a>
                              <a class="btn btn-outline-danger btn-sm border-0 btn-sm" href="data_kriteria_kehadiran_hapus.php?id_kehadiran=<?php echo $row['id_kehadiran'] ?>">
                                <span class="icon">
                                  <i class="fas fa-trash"></i>
                                </span>
                              </a>
                            </td>
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
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 4";
                                                                            $result = $konek->query($query);
                                                                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                                                              $meaning = $row["kriteria"];
                                                                              echo $meaning;
                                                                            } ?> </b></h5>
                        <div class=" mt-2 col-lg-12 col-xl-12" style="text-align: right;">
                          <a class="btn btn-primary shadow" href="data_kriteria_pendidikan_tambah.php">
                            <span class="icon ">
                              <i class="fas fa-plus mr-lg-2"></i>
                            </span>Tambah</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm " width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <th> No </th>
                        <th> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 4";
                              $result = $konek->query($query);
                              while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                $meaning = $row["kriteria"];
                                echo $meaning;
                              } ?> </th>
                        <th> Nilai </th>
                        <th> Aksi </th>
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
                            <td align="center">
                              <a class="btn btn-outline-primary border-0 btn-sm" href="data_kriteria_pendidikan_ubah.php?id_pendidikan=<?php echo $row['id_pendidikan'] ?>">
                                <span class="icon">
                                  <i class="fas fa-edit"></i>
                                </span>
                              </a>
                              <a class="btn btn-outline-danger btn-sm border-0 btn-sm" href="data_kriteria_pendidikan_hapus.php?id_pendidikan=<?php echo $row['id_pendidikan'] ?>">
                                <span class="icon">
                                  <i class="fas fa-trash"></i>
                                </span>
                              </a>
                            </td>
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