<?php
// Membuat Array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Febuari', 'Maret'];
$myArray = ['Derania', '18', 'true'];


var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";


echo "$hari[2]";
echo "<br>";
echo "$myArray[0]";
echo "<hr>";

// menambahkan isi array
// gunakan[]
$hari[] = 'Kamis';
$hari[] = "Jum'at";
$bulan[] = 'April';
print_r($hari);
echo "<br>";
print_r($bulan);
