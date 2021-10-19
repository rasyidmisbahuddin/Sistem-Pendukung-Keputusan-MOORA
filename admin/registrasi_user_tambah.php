<?php include_once 'atribut/head.php'; ?>

<?php
$sql    = "SELECT MAX(id_user) AS maxid FROM user_acc";
$carkod = mysqli_query($konek, $sql);
$datkod = mysqli_fetch_array($carkod, MYSQLI_ASSOC);
if ($datkod) {
    $nilkod  = $datkod['maxid'];
    $kode    = $nilkod + 1;
    $kodeoto = $kode;
} else {
    $kodeoto = "1";
}
?>

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- begin:: siderbar -->
    <?php include_once 'atribut/sidebar.php'; ?>
    <!-- end:: siderbar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">

            <?php include_once 'atribut/navbar.php'; ?>

            <!-- Begin Page Content -->
            <div class="col">
                <div class="container">
                    <!-- <div class="row"> -->
                    <div class="col-xl-12  col-lg-8">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h5 class="m-0 font-weight-bold text-primary"> <b> Tambah Akun</b></h5>
                            </div>
                            <div class="card-body">
                                <form class="form" method="post" name="converter">
                                    <div class="form-group">
                                        <label class="control-label col-md-12 col-sm-12 col-xs-12">ID Account</label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input class="form-control" type="text" name="id_user" value="<?= $kodeoto ?>" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Guru</label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input class="form-control" type="text" name="nama_user" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-6 col-sm-6">
                                            <label class="control-label col">Username</label>
                                            <div class="col">
                                                <input class="form-control" type="text" name="username" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-sm-6">
                                            <label class="control-label col">Password</label>
                                            <div class="col">
                                                <input class="form-control" type="password" name="password" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-12 col-sm-12 col-xs-12">Level Akun</label>
                                        <div class="input-group-prepend col-sm-1 col-sm-3 col-sm-3 ">
                                            <select class="custom-select" value="user" type=text name="level" required>
                                                <option value="User">User</option>
                                            </select>
                                        </div>
                                        <div class="mb-5">
                                        </div>
                                        <div class="col text-center m">
                                            <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                                            <a href="registrasi_user.php" class="btn btn-danger">Batal</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Content -->

    <!-- end -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php include_once 'atribut/foot.php'; ?>


</body>

</html>

<?php
if (isset($_POST['simpan'])) {

    $id_user    = $_POST['id_user'];
    $nama_user    = $_POST['nama_user'];
    $username = $_POST['username'];
    $password     = md5($_POST['password']);
    $level  = $_POST['level'];

    $sql_alat   = "SELECT * FROM user_acc WHERE username = '$username'";
    $query_alat = $konek->query($sql_alat);
    $cek_alat   = $query_alat->num_rows;

    if ($cek_alat > 0) {
        echo "<script>alert('Username telah dipakai!') </script>";
        echo "<script>window.location.href = \"registrasi_user.php\" </script>";
    } else {
        $query  = "INSERT INTO user_acc (id_user, username, nama_user, password, level) VALUES ('$id_user', '$username' ,'$nama_user','$password','$level')";
        $tambah = $konek->query($query);
        if ($tambah == true) {
            echo "<script>alert('Akun Berhasil Di Tambah') </script>";
            echo "<script>window.location.href = \"registrasi_user.php\" </script>";
        } else {
            echo "<script>alert('Akun Gagal Di Tambah') </script>";
            echo "<script>window.location.href = \"registrasi_user.php\" </script>";
        }
    }
}

?>