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
            <?php include_once 'perhitungan_hasil.php' ?>
            <!-- begin:: content -->
            <link rel="stylesheet" href="../assets/css/card.css">
            <!-- MERANGKING -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="card boxgreen mb-4 card border-success mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="mt-2 font-weight-bold  text-success "> <b> Hasil Rekomendasi </b></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-success  ">
                                <?php
                                arsort($optimasi);
                                $index = key($optimasi);
                                $hasil_alternatif = empty($alternatif[$index][1]) ? 'Belum ada!' : $alternatif[$index][1];
                                $hasil_optimasi = empty($optimasi[$index]) ? 'Belum ada!' : $optimasi[$index];
                                echo "Nama siswa prioritas yang terpilih untuk menerima bantuan adalah <b>" . $hasil_alternatif . "</b> ";
                                echo "dengan nilai optimasi <b>" . $hasil_optimasi . "</b> ";
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- rangking -->

                    <div class="col-lg-12 col-xl-12">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6">

                                        <h5 class="mt-2 font-weight-bold text-primary"> <b> Perangkingan </b></h5>
                                    </div>
                                    <div class="col-lg-6 col-xl-6" style="text-align: right;">
                                    <a class="btn btn-dark rounded shadow" href="metode_proses.php">
                              <i class="fas fa-calculator mr-lg-2"></i>Perhitungan MOORA</a>
                                        <a class="btn btn-dark" href="cetak.php">
                                            <span class="icon ">
                                                <i class="fas fa-print mr-lg-2"></i>
                                            </span>Cetak Tabel</a>
                                            
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">

                                <table border="border-left-info" class="table table-responsive-sm table-bordered table-striped shadow table-sm table-hover" width="100%" cellspacing="0" id=sortdisable>
                                    <thead align="center" class=thead-dark>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>Alternatif</th>
                                            <th> Nilai Optimasi </th>
                                            <th> Rangking </th>
                                        </tr>
                                    </thead>
                                    <tbody align="center">
                                        <?php
                                        error_reporting(0);
                                        arsort($optimasi);
                                        $index = key($optimasi);
                                       
                                        //-- menampilkan hasil akhir
                                        foreach ($optimasi as $key => $value) {
                                            $count = $count + 1;
                                            echo "<tr>"; 
                                            echo "<td>" . $alternatif[$key][1] . "</td>";
                                            echo "<td>A" . $alternatif[$key][0] . "</td>";
                                            echo  "<td>" . $optimasi[$key] .  "</td>";
                                            echo "<td> Rangking Ke " . $count . "</td>";
                                            echo "</tr>";
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include_once 'atribut/foot.php'; ?>
                <script src="../assets/datatables/jquery.dataTables.min.js"></script>
                <script src="../assets/datatables/dataTables.bootstrap4.js"></script>
                <script>
                    $('#sortdisable').dataTable({
                        "ordering": false
                    });
                </script>