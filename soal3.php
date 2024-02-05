<?php

// $hari = date('D');

// if($hari = 'Mon'){
//     echo "Maka hari ini upacara";
// }else{
//     echo "tidak upacara";
// }

$hari = date('D'); 

$upacara = $hari == 'Wed' ? "Maka hari ini upacara" : "tidak upacara";

echo "$upacara"
?>