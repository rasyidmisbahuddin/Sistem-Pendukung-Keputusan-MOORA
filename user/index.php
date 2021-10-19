<?php include_once 'atribut/head.php'; ?>
<?php include_once 'perhitungan_hasil.php' ?>
<?php include_once 'atribut/display.php'; ?>


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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- end:: siderbar -->
  <div id="content-wrapper" class="">
    <!-- begin:: main content -->
    <div id="content">

      <?php include_once 'atribut/navbar.php'; ?>

<header class="masthead  ">
    <div class="container mb-xl-5 mt">
        <div class="row align-items-center">
            <div class="col-lg-7 py-5">
                <h1 class="mb-4">Selamat datang <i><?php echo (!empty($_SESSION['username'])) ? $_SESSION['username'] : 'USER'; ?></i> di perhitungan SPK MOORA</h1>
                <h2 class="m-0">Dashboard ini merupakan halaman Awal dari Sistem Pendukung Keputusan pemilihan siswa penerima bantuan di SMPN 174</h2>
            </div>
            <div class="col-lg-5">
                <div class="py-5 px-4 masthead-cards">
                    <div class="d-flex">
                        <a href="data_siswa.php" class="w-50 pr-3 pb-4" data-toggle="tooltip" title="Klik disini untuk melihat daftar siswa yang telah didaftarkan">
                            <div class="card border-0 border-bottom-red shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="fa fa-table fa-4x my-2"></i>
                                    </div>
                                    Data Siswa
                                </div>
                            </div>
                        </a>
                        <a href="chart.php" data-toggle="tooltip" title="Klik disini untuk melihat kondisi siswa sesuai jumlah Siswa yang telah didaftarkan" class="w-50 pl-3 pb-4">
                            <div class="card border-0 border-bottom-blue shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="fa fa-chart-bar fa-4x my-2"></i>
                                    </div>
                                    Monitor Siswa
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex">
                        <a href="metode_proses.php" class="w-50 pr-3" data-toggle="tooltip" title="Klik untuk melakukan perhitungan berdasarkan jumlah siswa yang telah didaftarkan dengan metode MOORA">
                            <div class="card border-0 border-bottom-yellow shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="fa fa-4x fa-calculator my-2"></i>
                                    </div>
                                    Hitung !
                                </div>
                            </div>
                        </a>
                        <a href="perangkingan.php" class="w-50 pl-3" data-toggle="tooltip" title="Klik untuk melihat peringkat dari hasil perhitungan dengan metode MOORA">
                            <div class="card border-0 border-bottom-green shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="fa fa-4x fa-trophy my-2"></i>
                                    </div>
                                    Perangkingan
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="shape"></div>
                </div>
            </div>
        </div>
    </div>
    <svg style="pointer-events: none" class="wave" width="100%" height="70px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
        <defs>
            <style>
                .a {
                    fill: none;
                }
                
                .b {
                    clip-path: url(#a);
                }
                
                .c,
                .d {
                    fill: #f9f9fc;
                }
                
                .d {
                    opacity: 0.5;
                    isolation: isolate;
                }
            </style>
            <clipPath id="a">
                <rect class="a" width="1920" height="75"></rect>
            </clipPath>
        </defs>
        <title>wave</title>
        <g class="b">
            <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
        </g>
        <g class="b">
            <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
        </g>
        <g class="b">
            <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
        </g>
        <g class="b">
            <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
        </g>
    </svg>
</header>




      <!-- <div class="jumbotron shadow bg-gradient" style="background-color: #ffc996;">
        <h1 class="display-4 font-weight-normal text-primary text-dark">Selamat Datang <b> <?php echo (!empty($_SESSION['username'])) ? $_SESSION['username'] : 'USER'; ?></b></h1>
        <p class="lead text  font-weight-normal text-primary text-dark">Dashboard ini merupakan halaman Awal dari Sistem Pendukung Keputusan pemilihan siswa penerima bantuan di SMPN 174 </p>
        <hr class="my-4">
        <p>Tekan ini untuk melihat daftar siswa</p>
        <p class="lead  font-weight-normal">
          <a class="btn btn-light btn-lg shadow text-primary text-dark font-weight-normal mr-lg-3" href="data_siswa.php" role="button">
            <i class="fas fa-fw fa fa-table mr-3"></i>Data Siswa</a>
          <a class="btn btn-light btn-lg shadow text-primary text-dark font-weight-normal" href="chart.php" role="button">
            <i class="fas fa-fw fa-chart-bar mr-3"></i>Monitoring Siswa</a>
        </p>
      </div> -->

      <div class="container ">
        <div class="row">
          <div class="col-sm-6">
        </div>
            </div>

         
          <!-- <div class="col-sm-3">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div> -->

          <!-- begin:: content -->

          <!-- <div class="container-fluid">
            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-lg-6 col-xl-6">
                        <h5 class="mt-2 font-weight-bold text-primary center"> <b> Dashboard </b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body text-center mt-2 font-weight-bold text-primary">
                    <h3> Selamat datang <b><?php echo (!empty($_SESSION['username'])) ? $_SESSION['username'] : 'USER'; ?></b> di perhitungan</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div> -->

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
<?php include_once 'atribut/display.php'; ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<script>
$('#example').tooltip(options)
</script>