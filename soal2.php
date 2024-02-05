<?php

$waktupertama = "19:00";
$waktupertama_formatted = (date("H:i a", strtotime($waktupertama)) == "00:00 am") ? "12:00 pm" : date("h:i a", strtotime($waktupertama));

$waktukedua = "08:55";
$waktukedua_formatted = (date("H:i a", strtotime($waktukedua)) == "00:00 am") ? "12:00 am" : date("h:i a", strtotime($waktukedua));


echo "Waktu pertama: " . $waktupertama_formatted . "<br>";
echo "Waktu kedua: " . $waktukedua_formatted . "<br>";
?>