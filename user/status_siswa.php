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

            <!-- Status Siswa -->
            <div class="container-fluid">
                <div class="col-xl-12 col-lg-8">
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-6 col-xl-6">
                                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Perangkingan </b></h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table border="border-left-info" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead align="center">
                                    <tr>
                                        <th>Alternatif</th>
                                        <th>Nilai Optimasi</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <?php
                                    $rank = 1;
                                    foreach ($optimasi as $key => $value) {
                                        echo "<tr>";
                                        echo "<td>" . $alternatif[$key][0] . $key . "</td>";
                                        echo "<td>" . $optimasi[$key];
                                        "</td>";
                                        if ($rank <= 3) {
                                            echo "<td>DITERIMA</td>";
                                        } else {
                                            echo "<td>DITOLAK</td>";
                                        }
                                        echo "</tr>";
                                        $rank++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once 'atribut/foot.php'; ?>