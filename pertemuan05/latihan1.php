<?php 
// array
// variable yang dapat memiliki banyak nilai
$arr1 = [123, "Teks", false];
$bulan = ["Januari", "Februari", "Maret"];
$hari = ["Senin", "Selasa", "Rabu"];

// menampilkan array
echo "menampilkan seluruh array";
echo "<br>";
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";


// menampilkan 1 elemen array

echo "<br>";
echo "menampilkan 1 elemen array";
echo "<br>";
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";

// menambahkan elemen baru pada array

echo "<br>";
echo "menambahkan 1 elemen array pada akhir elemen";
echo "<br>";
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);

?>