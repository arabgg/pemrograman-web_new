<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi =  $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "penjumlahan  : {$a} + {$b} = {$hasilTambah}<br>";
echo "pengurangan  : {$a} - {$b} = {$hasilKurang}<br>";
echo "perkalian    : {$a} * {$b} = {$hasilKali}<br>";
echo "pembagian    : {$a} / {$b} = {$hasilBagi}<br>";
echo "sisa bagi    : {$a} % {$b} = {$sisaBagi}<br>";
echo "perpangkatan : {$a} ** {$b} = {$pangkat}<br>";

$hasilSama =$a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "{$a} == {$b} = {$hasilSama}<br>";
echo "{$a} != {$b} = {$hasilTidakSama}<br>";
echo "{$a} < {$b} = {$hasilLebihKecil}<br>";
echo "{$a} > {$b} = {$hasilLebihBesar}<br>";
echo "{$a} <= {$b} = {$hasilLebihKecilSama}<br>";
echo "{$a} => {$b} = {$hasilLebihBesarSama}<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo"{}"

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$hasilIndentik = $a === $b;
$hasilTidakIdentik = $a !== $b;