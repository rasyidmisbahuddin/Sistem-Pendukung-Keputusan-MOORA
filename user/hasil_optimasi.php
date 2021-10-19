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

            <!-- rangking -->
            <div class="container-fluid">
                <div class="col-xl-12 col-lg-8">
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-6 col-xl-6">
                                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Pengambilan Nilai Optimasi </b></h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table border="border-left-info" class="table table-bordered table-sm table-striped table-hover" id="sortdisable" width="100%" cellspacing="0">
                                <thead align="center" class="thead-dark">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alternatif</th>
                                        <th>Nilai Optimasi</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <?php
                                    foreach ($optimasi as $key => $value) {
                                        echo "<tr>";
                                        echo "<td>" . $alternatif[$key][1] . "</td>";
                                        echo "<td>A" . $alternatif[$key][0] . "</td>";
                                        echo "<td>" . $value . "</td>";
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
