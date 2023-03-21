<?php

// memanggil variable milik PHP
echo 'Dokumen php saya ada di: ' . $_SERVER['DOCUMENT_ROOT'];
echo '<br/>Nama file ini:  ' . $_SERVER['SCRIPT_FILENAME'];

echo '<hr>';

// ini pemanggilan di PHP
echo 'Hallo World';

// belajar variable
$namaSiswa = "Syarif";
$umur = 20;
$berat_badan = 75;
$_pekerjaan = "Programmer";

echo '<hr>';
echo 'Nama Siswa : ' . $namaSiswa;
echo '<br>Umur : ' . $umur;
echo '<br>Berat Badan : ' . $berat_badan;
echo '<br>Pekerjaan : ' . $_pekerjaan;
?>

<!-- pemanggilan diluar php dengan menggunakan HTML -->
<hr>
Nama Siswa :
<?= $namaSiswa ?>
<br>Umur :
<?= $umur ?>
<br>Berat Badan :
<?= $berat_badan ?>
<br>Pekerjaan :
<?= $_pekerjaan ?>