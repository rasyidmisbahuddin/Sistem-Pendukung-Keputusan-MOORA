<?php
include_once "koneksi.php";
$data_siswa = $_GET['query'];
$sql = "SELECT * from data_siswa WHERE jarak LIKE '%".$data_siswa."%' OR penghasilan LIKE '%".$data_siswa."%' OR tanggungan LIKE '%".$data_siswa."%' OR ratanilai LIKE '%".$data_siswa."%' 
 OR kehadiran LIKE '%".$data_siswa."%' OR pendidikan LIKE '%".$data_siswa."%' ORDER BY id_siswa ASC";
$query = $konek->query($sql);
$result = $query->fetch_all(MYSQLI_ASSOC);

foreach($result as $data) {
    $response['suggestions'][] = [
        'value'         => $data['namasiswa'],
        'id_alternatif' => $data['id_siswa'],
        'namasiswa'    => $data['namasiswa'],
        'penghasilan'         => $data['penghasilan'],
        'jarak'     => $data['jarak'],
        'tanggungan'       => $data['tanggungan'],
        'ratanilai'    => $data['ratanilai'],
        'kehadiran'    => $data['kehadiran'],
        'pendidikan'    => $data['pendidikan'],
    ];
}

echo json_encode($response);
