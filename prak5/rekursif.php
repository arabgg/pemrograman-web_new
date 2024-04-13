<?php
function tampilkanHaloDunia(){
    echo "halo dunai! <br>";

    tampilkanHaloDunia();
}
tampilkanHaloDunia();

for ($i = 1;$i <= 25,$i++){
    echo "perulangan ke-{$i}<br>";
}

function tampilkanAngka(int $jumlah,int $indeks = 1){
    echo "perulangan ke-{$index}<br>";

    if ($indeks < $jumlah){
        tampilkanAngka($jumlah,$indeks+ 1);
    }
}
tampilkanAngka(20)
?>