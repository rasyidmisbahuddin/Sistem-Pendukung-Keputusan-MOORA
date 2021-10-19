<?php
session_start();
include_once 'db/koneksi.php';

if (isset($_POST['masuk'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $sql    = "SELECT * FROM admin_acc WHERE username = '$username' AND password = '$password'";
  $query  = $konek->query($sql);
  $hasil  = $query->num_rows;
  $data   = $query->fetch_array(MYSQLI_ASSOC);

  if ($hasil == 1) {
    if ($data['password'] == $password)
      if ($data['level'] == "admin") {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $hasil['password'];
        header("location: admin/index.php");
      }
    if ($data['password'] == $password)
      if ($data['level'] == "user") {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $hasil['password'];
        header("location: user/index.php");
      } else {
        $user_or_pass = true;
      }
  } else {
    $user_or_pass = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/login.css" rel="stylesheet">
  <link href="assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- cdn font -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- cdn fontawesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="bg-gradient-primary">
  <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <img src="../spk/assets/img/sekolah.png" alt="Paris">
              <h5 class="card-title text-center">Masuk Sebagai <b>Pegawai</b></h5>

</html>
<?php if (isset($user_or_pass)) { ?>
  <div class="alert alert-danger alert-dismissible fade show shadow-sm text-center" role="alert">
  <b> Username </b> atau <b>Password</b> tidak sesuai!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php } ?>
<form class="form-signin user" method="post">
  <div class="form-label-group">
    <input type="username" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
    <label for="inputEmail">Username</label>
  </div>
  <div class="form-label-group">
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>
  <div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck1">
    <label class="custom-control-label mb-2" for="customCheck1">Remember password</label>
  </div>
  <button class="btn btn-lg btn-primary btn-block text-uppercase shadow" type="submit" name="masuk">Masuk</button>
  <a class="btn btn-lg btn-success btn-block text-uppercase shadow" href="login.php" type="submit">Masuk sebagai Guru</a>
</form>
</div>
</div>
</div>
</div>
</div>
</body>