<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- begin:: navbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button type="button" id="sidebarCollapse" class="btn btn btn-light border-0 btn-lg">
        <i class="fas fa-align-left"></i>

      </button>
    </div>
  </nav>
  <div class="row">
    <div class="col-xl-12">
      <h5 class="mt-2 ml-3 font-weight-bold text-primary"><b> Pemilihan Siswa Penerima Bantuan SMPN 174 MOORA </b></h5>
    </div>
  </div>
  <ul class="navbar-nav ml-auto">
    <div class="topbar-divider d-none d-sm-block m"></div>
    <br>
    <h6 class="mt-2 mr-1 text-primary text-dark">
      <h6 class=" mt-2 mr-1 font-weight-bold text-primary text-dark"> <span class="icon">
          <i class="fas fa-user-circle mr-lg-2 text-lg"></i><?php echo (!empty($_SESSION['username'])) ? $_SESSION['username'] : 'USER'; ?> </h6>
    </h6>
    <a class="btn btn-light rounded-circle mr-lg-2" href="pengaturan_akun.php">
      <i class="fas fa-cog"></i></a>
    <li class="nav-item dropdown no-arrow ">
      <button type="button" class="btn btn-danger font-weight-bolder btn-user shadow rounded-pill" data-toggle="modal" data-target="#exampleModalCenter">
      <i class="fas fa-sign-out-alt mr-lg-2" ></i>Sign Out</button>
    </li>
  </ul>
</nav>

<!-- Modal -->
<div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bolder text-primary" id="exampleModalLongTitle">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda ingin keluar dari halaman ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a type="button" class="btn btn-primary btn btn-danger" href="../logout.php">Iya</a>
      </div>
    </div>
  </div>
</div>
</li>
</ul>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- end:: navbar -->
<script>
  $(document).ready(function() {

    $('#sidebarCollapse').on('click', function() {
      $('#sidebar').toggleClass('active');
    });

  });
</script>