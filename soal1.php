<?php
// $tabungan = 850000;

// if ($tabungan > 500000){
//     $bunga = $tabungan - $tabungan * 0.05;
//     echo "tabungan sebesar" . $bunga;
// } else{
//     echo "tidak mensapat diskon ";
// }

$tabungan = 850000;
$bunga = $tabungan + $tabungan * 0.05;

$bunga = $tabungan > 500000 ? "tabungan sebesar : $bunga" : "tidak mendapat diskon";

echo "$bunga"
?>