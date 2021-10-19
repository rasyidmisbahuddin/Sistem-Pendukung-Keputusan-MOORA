<?php
//-- query untuk mendapatkan semua data kriteria di tabel moo_kriteria
$sql = 'SELECT * FROM moo_kriteria';
$result = $konek->query($sql);
//-- menyiapkan variable penampung berupa array
$kriteria=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   $kriteria[$row['id_kriteria']]=array($row['kriteria'],$row['type'],$row['bobot']);
}

//-- query untuk mendapatkan semua data kriteria di tabel moo_alternatif
$sql = 'SELECT * FROM moo_alternatif';
$result = $konek->query($sql);
//-- menyiapkan variable penampung berupa array
$alternatif=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   $alternatif[$row['id_alternatif']] = array(
     $row['id_alternatif'],
     $row['alternatif'],
     $row['penghasilan'],
     $row['jarak'],
     $row['tanggungan'],
     $row['ratanilai'],
     $row['pendidikan'],
     $row['kehadiran'],
   );
   
}

foreach ($result as $row) {
   $id_siswa[$row['id_siswa']] = array(
     $row['id_siswa'],
   );
   
}

//-- query untuk mendapatkan semua data sample penilaian di tabel moo_nilai
$sql = 'SELECT * FROM moo_nilai ORDER BY id_alternatif, id_kriteria';
$result = $konek->query($sql);
//-- menyiapkan variable penampung berupa array
$sample=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   //-- jika array $sample[$row['id_alternatif']] belum ada maka buat baru
   //-- $row['id_alternatif'] adalah id kandidat/alternatif
   if (!isset($sample[$row['id_alternatif']])) {
      $sample[$row['id_alternatif']] = array();
   }
   $sample[$row['id_alternatif']][$row['id_kriteria']] = $row['nilai'];
}

//-- inisialisasi nilai normalisasi dengan nilai dari $sample
$normal = $sample;
foreach($kriteria as $id_kriteria=>$k){
   //-- inisialisasi nilai pembagi tiap kriteria
   $pembagi=0;
   foreach($alternatif as $id_alternatif=>$a){
      $pembagi+=pow($sample[$id_alternatif][$id_kriteria],2);
   }
   foreach($alternatif as $id_alternatif=>$a){
      $normal[$id_alternatif][$id_kriteria]/=sqrt($pembagi);
   }
}
//-- menyiapkan variabel untuk menyimpan data yang sudah dioptimasi
$optimasi=array();
foreach($alternatif as $id_alternatif=>$a){
   $optimasi[$id_alternatif] = 0;
   foreach($kriteria as $id_kriteria => $k){
     $optimasi[$id_alternatif] += $normal[$id_alternatif][$id_kriteria] * ($k[1] == 'Benefit' ? 1 : -1) * $k[2]/100;
   }
}
?>