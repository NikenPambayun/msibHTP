<?php
require_once 'Dosen.php';
require_once 'Mahasiswa.php';
require_once 'Staff.php';

$d1 = new Dosen('Budi', 'L', '111', 'M.Kom');
$d2 = new Dosen('Siti', 'P', '112', 'M.Kom');
$d3 = new Dosen('Deden', 'L', '113', 'M.Kom');

$m1 = new Mahasiswa('Rita', 'P', '3', 'Teknik Informatika');
$m2 = new Mahasiswa('Yudi', 'L', '3', 'Teknik Informatika');
$m3 = new Mahasiswa('Anita', 'P', '3', 'Teknik Informatika');

$s1 = new Staff('Ari', 'L', '123', 'BAA', 5000000);

$ar_data = [$d1, $d2, $d3, $m1, $m2, $m3, $s1];

foreach ($ar_data as $data) {
    $data->cetak();
}
?>