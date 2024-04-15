<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION ["nama "]=$_POST ["nama"];
    $_SESSION ["NIK "]=$_POST ["NIK"];
    $_SESSION ["jk "]=$_POST ["jk"];
    $_SESSION ["alamat "]=$_POST ["alamat"];
    setcookie("peminjaman",$_POST["peminjaman"]);
    setcookie("pengembalian",$_POST["pengembalian"]);
    setcookie("tenda",$_POST["tenda"]);
    setcookie("kompor",$_POST["kompor"]);
    setcookie("tikar",$_POST["tikar"]);
    setcookie("terpal",$_POST["terpal"]);
    setcookie("setmasak",$_POST["setmasak"]);
    setcookie("tas",$_POST["tas"]);
    
}
header("location:struk.php");


?>