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
      <div class = "container">
          <div class="row">
          <div class="col-lg-12 col-xl-12">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col">
                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Pengaturan Akun Guru </b></h5>
                  </div>
                  <div class="col-lg-16 col-xl-6" style="text-align: right;">
                    <a class="btn btn-primary shadow" href="registrasi_user_tambah.php"> <span class="icon ">
                              <i class="fas fa-user-plus mr-lg-2"></i>Tambah Akun Guru</a>
                  </div>
                </div>
              </div>
              <div class="card-body table-responsive ">
                <table border="border-left-info" class=" shadow table table-bordered table-striped table table-hover table-sm " id="sortdisable">
                  <thead align="center" class="thead-dark">
                    <th>ID</th>
                    <th>Nama Guru</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th style="width: 100px;">Aksi</th>
                  </thead>
                  <tbody>
                    <?php
                      $query  = "SELECT * FROM user_acc";
                      $result = $konek->query($query);
                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
                      
                      <tr>
                        <td align="center"><?php echo $row['id_user']; ?></td>
                        <td align="center"><?php echo $row['nama_user']; ?></td>
                        <td align="center"><?php echo $row['username']; ?></td>
                        <td align="center"><i><?php echo "Dirahasiakan"?></i></td>
                        <td align="center"><?php echo $row['level']; ?></td>
                        <td align="center">
                          <a class="btn btn-outline-info btn-sm mb-2  border-0"
                            href="registrasi_user_ubah.php?id_user=<?php echo $row['id_user'] ?>">
                            <span class="icon">
                              <i class="fas fa-edit"></i>
                            </span>
                          </a>
                          <a class="btn btn-info  btn-sm mb-2  border-0 btn-outline-danger"
                            href="registrasi_user_hapus.php?id_user=<?php echo $row['id_user'] ?>">
                            <span class="icon">
                              <i class="fas fa-trash"></i>
                            </span>
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../assets/js/jquery-easing/delete.js"></script>
<script src="../assets/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/datatables/dataTables.bootstrap4.js"></script>
<script>
$('#sortdisable').dataTable({
        "ordering": false
        });
 </script>