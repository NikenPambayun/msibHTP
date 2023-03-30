<?php
require 'bank.php';

$n1 = new Bank('001', 'Siti', 30000000);
$n2 = new Bank('002', 'Andi', 40000000);
$n3 = new Bank('003', 'Budi', 70000000);
$n4 = new Bank('004', 'Lala', 54000000);
$n5 = new Bank('005', 'Ali', 60000000);

// $n1 -> cetak();
// $n2 -> cetak();
// $n3 -> cetak();
// $n4 -> cetak();
// $n5 -> cetak();

// ambil uang
$n1 -> ambil(10000000);
$n2 -> ambil(20000000);
$n3 -> ambil(20000000);
$n4 -> ambil(4000000);
$n5 -> ambil(30000000);

// setor uang 
$n1 -> setor(2000000);


$dataNasabah = array($n1, $n2, $n3, $n4, $n5);
foreach ($dataNasabah as $data){
    $data->cetak();
}
echo '<br>Jumlah Nasabah : '.Bank::$jml.' orang';
?>