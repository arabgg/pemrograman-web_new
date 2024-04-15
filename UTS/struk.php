<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>struk</title>
    <link rel="stylesheet" href="background1.css" type="text/css">
</head>
<body class="container">
    <div class="form">
    
    <h2>struk pembelajaan</h2>
            <table>
            <tr class="css">
                <td align="left">Nama</td>
                <td><?php echo $_SESSION["nama"];?>></td>
            </tr>
            <tr class="css">
                <td align="left">NIK</td>
                <td><?php echo $_SESSION["NIK"];?></td>
            </tr>
            <tr class="css">
                <td align="left">Tanggal Peminjaman</td>
                <td><?php echo $_COOKIE["peminjaman"];?></td>
            </tr>
            <tr class="css">
                <td align="left">Tanggal pengembalian</td>
                <td><?php echo $_COOKIE["pengembalian"];?></td>
            </tr>
            <tr class="css">
                <td align="left">Jenis Kelamin</td>
                <td><?php echo $_SESSION["jk"];?></td>
            </tr>
            <tr class="css">
                <td align="left">Alamat</td>
                <td><?php echo $_SESSION["alamat"];?></td>
            </tr>
            <tr class="css">
                <td align="left">Peralatan Sewa : </td>
            </tr>
            <tr class="css">
                <td align="left">Tenda</td>
                <td><?php echo $_COOKIE["tenda"];?></td>
            </tr>
            <tr class="css">
                <td align="left">Kompor</td>
                <td><?php echo $_COOKIE["kompor"];?></td>
            </tr>
            <tr class="css">
                <td align="left">Tikar</td>
                <td><?php echo $_COOKIE["tikar"];?></td>
            </tr>
            <tr class="css">
                <td align="left">Terpal</td>
                <td><?php echo $_COOKIE["terpal"];?></td>
            </tr>
            <tr class="css">
                <td align="left">Peralatan Masak</td>
                <td><?php echo $_COOKIE["setmasak"];?></td>
            </tr>
            <tr class="css">
                <td align="left">Tas Gunung/ Carrier</td>
                <td><?php echo $_COOKIE["tas"];?></td>
            </tr>
            <tr>
                
                <td>
                </td>
            </tr>
            
        </tr>
    </table>
    </div>
</body>
</html>