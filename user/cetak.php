<?php session_start(); ?>
<?php include_once '../db/koneksi.php'; ?>




<head>
    <title>Cetak Data Siswa</title>
</head>

<body>

    <center>

        <h2>DATA NAMA SISWA PENERIMA BANTUAN</h2>
        <h4>SMPN 174 JAKARTA</h4>

    </center>


    <?php include_once 'perhitungan_hasil.php' ?>

    <script>
        window.print();
    </script>
    <table border="1" class="center" width="100%" cellspacing="0">
        <thead align="center">
            <tr>
                <th>Nama Siswa</th>
                <th> Nilai Optimasi </th>
                <th> Rangking </th>
            </tr>
        </thead>
        <tbody align="center">
            <?php
            error_reporting(0);
            arsort($optimasi);
            $index = key($optimasi);

            //-- menampilkan hasil akhir
            foreach ($optimasi as $key => $value) {
                $count = $count + 1;
                echo "<tr>";
                echo "<td>" . $alternatif[$key][1] . "</td>";
                echo  "<td>" . $optimasi[$key] .  "</td>";
                echo "<td> Rangking Ke " . $count . "</td>";
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>
</body>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
</style>
<!-- jQuery library -->
<script src="assets/"></script>

<!-- jsPDF library -->
<script src="js/jsPDF/dist/jspdf.min.js"></script>