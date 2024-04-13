<?php
$a = 10;
$b = 5;
$c =$a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variable a: {$a} <br>";
echo "Variable b: {$b} <br>";
echo "Variable c: {$c} <br>";
echo "Variable d: {$d} <br>";
echo "Variable e: {$e} <br>";

var_dump($e);
$nilaiMatematika = 5.1;
$nilaiIpa = 6.7;
$nilaiBahasaIndonesia = 93;

$rataRata = ($nilaiMatematika + $nilaiIpa + $nilaiBahasaIndonesia)/3;

echo "matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIpa} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo " Rata-rata: {$rataRata}<br>";
var_dump($rataRata);
$apakahSiswalulus = true;
$apakahSiswaSudahujian = false;
echo"<br>";
var_dump($apakahSiswalulus);
echo"<br>";
var_dump($apakahSiswaSudahujian);
echo"<br>";

$namaDepan = "Ibnu";
$namaBelakang = 'jakaria';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap = $namaDepan .' ' . $namaBelakang;

echo"Nama depan: {$namaDepan} <br>";
echo'nama Belakang: '.$namaBelakang .'<br>';
echo $namaLengkap;
echo "<br>";
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis farbri"];
echo $listMahasiswa[0];
?>