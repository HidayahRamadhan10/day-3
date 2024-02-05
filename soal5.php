<?php

// $kehadiran = 100;

// $persentase = $kehadiran == 100 ? "tidak berkurang" : ($kehadiran == 97 ? "Sakit dan izin 3%" : ($kehadiran
// == 95 ? "Alfa 5%" : ""));

// echo $persentase;

$keterangan = 'izin';
$persentase = 100;

$izinsakit = 1;
$alfa = 0;

$hasil = $izinsakit ? $persentase - 3 : ($alfa ? $persentase - 5 : $persentase);

$hasil = $keterangan == 'izin' || $keterangan == 'sakit' ? $persentase - 3 :
($kehadiran == 'alfa' ? $persentase - 5 : $persentase);

echo $hasil
?> 