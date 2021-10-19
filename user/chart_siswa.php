<script>
    var ctx = document.getElementById('myChartex').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: 'Siswa',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    Chart.defaults.font.size = 12;
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Sarjana", "Diploma", "SMA", "SMP", "SD"],
            datasets: [{
                label: 'Siswa',
                data: [
                    <?php
                    $jumlah_sarjana = mysqli_query($konek, "SELECT * from data_siswa where pendidikan='SARJANA'");
                    echo mysqli_num_rows($jumlah_sarjana);
                    ?>,
                    <?php
                    $jumlah_diploma = mysqli_query($konek, "SELECT * from data_siswa where pendidikan='DIPLOMA'");
                    echo mysqli_num_rows($jumlah_diploma);
                    ?>,
                    <?php
                    $jumlah_sma = mysqli_query($konek, "SELECT * from data_siswa where pendidikan='SMA'");
                    echo mysqli_num_rows($jumlah_sma);
                    ?>,
                    <?php
                    $jumlah_smp = mysqli_query($konek, "SELECT * from data_siswa where pendidikan='SMP'");
                    echo mysqli_num_rows($jumlah_smp);
                    ?>,
                    <?php
                    $jumlah_sd = mysqli_query($konek, "SELECT * from data_siswa where pendidikan='SD'");
                    echo mysqli_num_rows($jumlah_sd);
                    ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }

                }]
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById("chart_penghasilan").getContext('2d');
    Chart.defaults.font.size = 13;
    var myChart = new Chart(ctx, {
        type: 'line',

        data: {
            labels: ["Penghasilan Rp 50.000 - Rp 1.000.000", " Penghasilan Rp 1.000.000 - Rp 2.000.000", "Penghasilan Rp 2.000.000 - Rp 4.000.000", " Penghasilan Lebih dari Rp4,000,000"],
            datasets: [{
                fill: true,
                label: 'Siswa',
                data: [
                    <?php
                    $jumlah_sarjana = mysqli_query($konek, "SELECT * from data_siswa where penghasilan='Rp 50.000 - Rp 1.000.000'");
                    echo mysqli_num_rows($jumlah_sarjana);
                    ?>,
                    <?php
                    $jumlah_diploma = mysqli_query($konek, "SELECT * from data_siswa where penghasilan='Rp 1.000.000 - Rp 2.000.000'");
                    echo mysqli_num_rows($jumlah_diploma);
                    ?>,
                    <?php
                    $jumlah_sma = mysqli_query($konek, "SELECT * from data_siswa where penghasilan='Rp 2.000.000 - Rp 4.000.000'");
                    echo mysqli_num_rows($jumlah_sma);
                    ?>,
                    <?php
                    $jumlah_smp = mysqli_query($konek, "SELECT * from data_siswa where penghasilan='Lebih dari Rp 4.000.000'");
                    echo mysqli_num_rows($jumlah_smp);
                    ?>

                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById("chart_ratanilai").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["A (Nilai 91 atau Lebih)", "B (Nilai 81 atau Lebih)", "C (Nilai 61 atau Lebih)", "D (Nilai kurang dari 60)"],
            datasets: [{
                label: 'Siswa',
                data: [
                    <?php
                    $jumlah_sarjana = mysqli_query($konek, "SELECT * from data_siswa where ratanilai between 91 and 100 ");
                    echo mysqli_num_rows($jumlah_sarjana);
                    ?>,
                    <?php
                    $jumlah_diploma = mysqli_query($konek, "SELECT * from data_siswa where ratanilai between 81 and 90 ");
                    echo mysqli_num_rows($jumlah_diploma);
                    ?>,
                    <?php
                    $jumlah_sma = mysqli_query($konek, "SELECT * from data_siswa where ratanilai between 61 and 80");
                    echo mysqli_num_rows($jumlah_sma);
                    ?>,
                    <?php
                    $jumlah_smp = mysqli_query($konek, "SELECT * from data_siswa where ratanilai <=60");
                    echo mysqli_num_rows($jumlah_smp);
                    ?>

                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById("diagramjarak").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Lebih dari 10 KM", "Kurang dari 10 KM", "Kurang dari 5 KM", "Kurang dari 3 KM"],
            datasets: [{
                fill: true,
                label: 'Siswa',
                data: [
                    <?php
                    $jumlah_sarjana = mysqli_query($konek, "SELECT * from data_siswa where jarak between 10.1 and 100");
                    echo mysqli_num_rows($jumlah_sarjana);
                    ?>,
                    <?php
                    $jumlah_diploma = mysqli_query($konek, "SELECT * from data_siswa where jarak between 5.1 and 10");
                    echo mysqli_num_rows($jumlah_diploma);
                    ?>,
                    <?php
                    $jumlah_sma = mysqli_query($konek, "SELECT * from data_siswa where jarak between 3 and 5");
                    echo mysqli_num_rows($jumlah_sma);
                    ?>,
                    <?php
                    $jumlah_smp = mysqli_query($konek, "SELECT * from data_siswa where jarak <=2.9");
                    echo mysqli_num_rows($jumlah_smp);
                    ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById("chart_kehadiran").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["90%-100%", "70% - 89%", "60% - 69%", "Kurang dari 60%"],
            datasets: [{
                label: 'Siswa',
                data: [
                    <?php
                    $jumlah_sarjana = mysqli_query($konek, "SELECT * from data_siswa where kehadiran between 90 and 100");
                    echo mysqli_num_rows($jumlah_sarjana);
                    ?>,
                    <?php
                    $jumlah_diploma = mysqli_query($konek, "SELECT * from data_siswa where kehadiran between 70 and 89");
                    echo mysqli_num_rows($jumlah_diploma);
                    ?>,
                    <?php
                    $jumlah_sma = mysqli_query($konek, "SELECT * from data_siswa where kehadiran between 60 and 69");
                    echo mysqli_num_rows($jumlah_sma);
                    ?>,
                    <?php
                    $jumlah_smp = mysqli_query($konek, "SELECT * from data_siswa where kehadiran <=59");
                    echo mysqli_num_rows($jumlah_smp);
                    ?>

                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>