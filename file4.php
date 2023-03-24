<?php
//deklarasi & inisialisasi
$nama = "Niken";
$totalbelanja = 30000;
$keterangan = "";

//struktur kendali if
if($totalbelanja > 100000){
    $keterangan = "Selamat $nama, Anda dapat hadiah";
} else {
    $keterangan = "Terimakasih $nama sudah berbelanja";
}
?>

Nama Pelanggan : <?= $nama ?>
<br> Total Belanja : <?= $totalbelanja ?>
<br> Keterangan : <?= $keterangan ?>