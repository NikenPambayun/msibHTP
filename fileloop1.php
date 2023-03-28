<?php
// jika tidak menggunakan looping
echo 'Bilangan 1';
echo '<br>Bilangan 2';
echo '<hr>';

// menggunakan looping for increment 
for ($x=1; $x <= 10 ; $x++) { 
    echo '<br> Bilangan ' .$x;
}

echo '<hr>';

// menggunakan looping for decrement 
for ($y=10; $y >= 1 ; $y--) { 
    echo '<br> Angka ' .$y;
}

// looping menggunakan while
echo '<hr> Looping Menggunakan While <hr>';

$xz=1;
while ($xz <= 5) {
    echo '<br> Bilangan ' .$xz;
    $xz++;
}

echo '<hr>';

$yz=5;
while ($yz >= 1) {
    echo '<br> Bilangan ' .$yz;
    $yz--;
}

echo '<hr>';

//looping menggunakan do while
$a=1;
do{
    echo '<br> Bilangan '.$a;
    $a++;
}
while($a <= 10);
?>