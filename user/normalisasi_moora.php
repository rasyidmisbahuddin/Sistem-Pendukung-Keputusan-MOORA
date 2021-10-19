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

            <!-- normalisasi -->
            <div class="container-fluid">
                <div class="col-xl-12 col-lg-8">
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-6 col-xl-6">
                                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Membuat Matriks Normalisasi </b></h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table border="border-left-info" class=" shadow table table-bordered shadow table-striped table-sm table table-hover " width="100%" cellspacing="0" id="sortdisable">
                                <thead align="center" class="thead-dark">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alternatif</th>
                                        <?php
                                        foreach ($kriteria as $key => $value) {
                                            echo "<th>" . $value[0] . "</th>";
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <?php
                                    foreach ($normal as $key => $value) {
                                        echo "<tr>";
                                        echo "<td>" . $alternatif[$key][1] . "</td>";
                                        echo "<td>A" . $alternatif[$key][0] . "</td>";
                                        for ($i = 1; $i <= count($value); $i++) {
                                            echo "<td>" . $value[$i] . "</td>";
                                        }
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