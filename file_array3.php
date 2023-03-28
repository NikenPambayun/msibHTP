<?php
$m1 = ['NIM'=>'01111021', 'nama'=>'Andi', 'nilai'=>80];
$m2 = ['NIM'=>'01111022', 'nama'=>'Rika', 'nilai'=>70];
$m3 = ['NIM'=>'01111023', 'nama'=>'Sinta', 'nilai'=>50];
$m4 = ['NIM'=>'01111024', 'nama'=>'Lala', 'nilai'=>40];
$m5 = ['NIM'=>'01111025', 'nama'=>'Sandi', 'nilai'=>90];
$m6 = ['NIM'=>'01111026', 'nama'=>'Robi', 'nilai'=>75];
$m7 = ['NIM'=>'01111027', 'nama'=>'Budi', 'nilai'=>30];
$m8 = ['NIM'=>'01111028', 'nama'=>'Ali', 'nilai'=>85];

$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8];
$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', ' Predikat'];
?>

<table style="width: 100%; background-color: burlywood;" border="1">
    <thead>
        <?php
        foreach ($ar_judul as $judul) {
        ?>
        <th><?= $judul ?></th>
        <?php } ?>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($mahasiswa as $mhs) {
        $ket = ($mhs['nilai']>= 60 ? 'Lulus' : "Tidak Lulus");
        // grade
        if($mhs ['nilai']>= 80 && $mhs ['nilai']<= 100) $grade = 'A';
        else if($mhs ['nilai']>= 75 && $mhs ['nilai']< 80) $grade = 'B';
        else if($mhs ['nilai']>= 60 && $mhs ['nilai']< 75) $grade = 'C';
        else if($mhs ['nilai']>= 30 && $mhs ['nilai']< 60) $grade = 'D';
        else if($mhs ['nilai']>= 0 && $mhs ['nilai']< 30) $grade = 'E';
        else $grade;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $mhs['NIM'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['nilai'] ?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
        </tr>
        <?php $no++; } ?>
    </tbody>
</table>