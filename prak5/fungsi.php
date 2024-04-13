<?php

function perkenalan($salam,$nama){
    echo $salam.", ";
    echo "perkenalan, nama saya".$nama."<br/>";
    echo "senang berkenalan dengan anda<br/>";
}

perkenalan("hamdana","Hallo");

echo "<hr>";

$saya = "Ellok";
$ucapanSalam + "selamat pagi";

perkenalan($saya);

function hitungUmur($thn_lahir,$thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
perkenalan($nama,$salam="Asalamualaikum"){
    echo $salam.",";
    echo "perkelakan ,nama saya".$nama"<br/>";

    echo "Umur saya adalah ".hitungUmur(2004,2023) ."tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}
perkenalan("Elok");


?>