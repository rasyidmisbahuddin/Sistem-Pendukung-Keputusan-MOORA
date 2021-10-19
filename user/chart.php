<?php include_once 'atribut/head.php'; ?>
<?php include_once 'perhitungan_hasil.php' ?>





<?php
$sql     = "SELECT * FROM data_siswa";
$query   = mysqli_query($konek, $sql);
$row     = mysqli_num_rows($query);
?>




<!-- Page Wrapper -->
<div id="wrapper">
    <!-- begin:: siderbar -->
    <?php include_once 'atribut/sidebar.php'; ?>
    <link rel="stylesheet" href="../assets/css/card.css">
    <link rel="stylesheet" href="../assets/css/cardanimation.css">
    <!-- end:: siderbar -->


    <div id="content-wrapper" class="d-flex flex-column">
        <!-- begin:: main content -->
        <div id="content">

            <?php include_once 'atribut/navbar.php'; ?>

            <div class="container ">
                <div class="col">
                    <div class="card mb-3  ">
                        <div class="card-header h5 bg-white font-weight-bold text-primary shadow text-dark   ">Diagram Monitoring Data Siswa SMPN 174</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="col">
                <div class="card border-success mb-4 boxblue ">
                    <div class="card-header h5 font-weight-bold text-center ">Jumlah Siswa</div>
                    <div class="card-body">
                        <p class="card-text h1 font-weight-bolder counter text-center">
                            <?php echo $row ?></p>
                        <p class="card-text h6 mb-3 mt-md-4 text-center ">
                            Siswa Telah Terdaftar Oleh Sistem </p>
                    </div>
                </div>
                <!-- begin:: content -->

            </div>

            <div class="col-xl-12 col-lg-12">
                <div class="card boxred mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <h5 class="mt-2 font-weight-bold text-primary center"> <b>Penghasilan Orang Tua Siswa</b></h5>
                            </div>
                        </div>
                    </div>
                    <div style="margin: 20spx auto;" class="ml-lg-5 mb-lg-3 mt-lg-3">
                        <canvas id="chart_penghasilan" width="200" height="50"></canvas>
                    </div>

                </div>
            </div>


            <div class="container-fluid ">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="card boxred mb-4">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                        <h5 class="mt-2 font-weight-bold text-primary center"> <b> Pendidikan Terakhir Orang Tua Siswa</b></h5>
                                    </div>
                                    <!-- <div class="col-lg-6 col-xl-6" style="text-align: right;">
                                        <button class="btn btn-info " id="btn1">Tambah</button>
                                    </div> -->
                                </div>
                            </div>
                            <div style="width: 400px;margin: 20spx auto;" class="ml-lg-5 mb-lg-3 mt-lg-3">
                                <canvas id="myChart" width="50" height="30"></canvas>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card boxred mb-4">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                        <h5 class="mt-2 font-weight-bold text-primary center"> <b>Jarak yang Ditempuh Oleh Siswa</b></h5>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 400px;margin: 20spx auto;" class="ml-lg-5 mb-lg-3 mt-lg-3">
                                <canvas id="diagramjarak" width="50" height="30"></canvas>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <div class="card boxred mb-4">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                        <h5 class="mt-2 font-weight-bold text-primary center"> <b>Nilai Rata-Rata yang Diraih siswa</b></h5>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 400px;margin: 20spx auto;" class="ml-lg-5 mb-lg-3 mt-lg-3">
                                <canvas id="chart_ratanilai" width="50" height="30"></canvas>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <div class="card boxred mb-4">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                        <h5 class="mt-2 font-weight-bold text-primary center"> <b>Persentase Kehadiran Siswa</b></h5>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 400px;margin: 20spx auto;" class="ml-lg-5 mb-lg-3 mt-lg-3">
                                <canvas id="chart_kehadiran" width="50" height="30"></canvas>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: content -->

        <!-- begin:: content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-8">


                    <div class="row">
                        <div class="col-lg-8">
                            <!-- begin:: tabel cryptocurrencies -->

                            <!-- end:: konver mining hash power -->
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



<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.js" integrity="sha512-opXrgVcTHsEVdBUZqTPlW9S8+99hNbaHmXtAdXXc61OUU6gOII5ku/PzZFqexHXc3hnK8IrJKHo+T7O4GRIJcw==" crossorigin="anonymous"></script>
<?php include_once 'chart_siswa.php' ?>
<?php include_once 'atribut/display.php'; ?>


<script>
$(document).ready(function() {
    $('.counter').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 700,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

});
</script>