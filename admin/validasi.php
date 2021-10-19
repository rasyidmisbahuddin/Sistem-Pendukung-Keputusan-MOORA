<!DOCTYPE HTML>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    .warning {
      color: #FF0000;
    }
  </style>
</head>

<body>


  <?php
  $error_namasiswa = "";
  $error_penghasilan = "";
  $error_pendidikan = "";
  $error_jarak = "";
  $error_tanggungan = "";
  $error_ratanilai = "";
  $error_kehadiran = "";

  $namasiswa = "";
  $penghasilan = "";
  $pendidikan = "";
  $jarak = "";
  $tanggungan = "";
  $ratanilai = "";
  $kehadiran = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["namasiswa"])) {
      $error_kehadiran = "Nama tidak boleh kosong";
    } else {
      $namasiswa = cek_input($_POST["namasiswa"]);
      if (!preg_match("/^[a-zA-Z ]*$/", $namasiswa)) {
        $nameErr = "Nama Hanya boleh Huruf ";
      }
    }



    if (empty($_POST["penghasilan"])) {
      $error_penghasilan = "Penghasilan tidak boleh kosong";
    } else {
      $penghasilan = cek_input($_POST["penghasilan"]);
    }

    if (empty($_POST["pendidikan"])) {
      $error_pendidikan = "Pendidikan Terakhir Orang Tua tidak boleh kosong";
    } else {
      $pendidikan = cek_input($_POST["pendidikan"]);
    }


    if (empty($_POST["jarak"])) {
      $error_telp = "Jarak tidak boleh kosong";
    } else {
      $jarak = cek_input($_POST["jarak"]);

      if (!is_numeric($jarak)) {
        $error_jarak  = "Jarak hanya boleh diisi dengan angka";
      }
    }

    if (empty($_POST["tanggungan"])) {
      $error_tanggungan = "Tanggungan tidak boleh kosong";
    } else {
      $jarak = cek_input($_POST["tanggungan"]);

      if (!is_numeric($tanggungan)) {
        $error_tanggungan  = "Tanggungan hanya boleh diisi dengan angka";
      }
    }

    if (empty($_POST["ratanilai"])) {
      $error_telp = "Rata-Rata Nilai tidak boleh kosong";
    } else {
      $jarak = cek_input($_POST["ratanilai"]);

      if (!is_numeric($ratanilai)) {
        $error_ratanilai  = 'Rata-Rata Nilai hanya boleh diisi dengan angka';
      }
    }

    if (empty($_POST["kehadiran"])) {
      $error_telp = "Kehadiran tidak boleh kosong";
    } else {
      $jarak = cek_input($_POST["kehadiran"]);

      if (!is_numeric($ratanilai)) {
        $error_ratanilai  = "Kehadiran hanya boleh diisi dengan angka";
      }
    }
  }

  function cek_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

</body>

</html>