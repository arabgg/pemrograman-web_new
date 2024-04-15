<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION ["nama"]= htmlspecialchars ($_POST ["nama"]);
    $_SESSION ["NIK"]=htmlspecialchars ($_POST ["NIK"]);
    $_SESSION ["jk"]=htmlspecialchars ($_POST ["jk"]);
    $_SESSION ["alamat"]=htmlspecialchars ($_POST ["alamat"]);
    setcookie("peminjaman",htmlspecialchars ($_POST["peminjaman"]));
    setcookie("pengembalian",htmlspecialchars ($_POST["pengembalian"]));
    setcookie("tenda",htmlspecialchars ($_POST["tenda"]));
    setcookie("kompor",htmlspecialchars ($_POST["kompor"]));
    setcookie("tikar",htmlspecialchars ($_POST["tikar"]));
    setcookie("terpal",htmlspecialchars ($_POST["terpal"]));
    setcookie("setmasak",htmlspecialchars ($_POST["setmasak"]));
    setcookie("tas",htmlspecialchars ($_POST["tas"]));
    
}
header("location:struk.php");


?>