<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>struk pembelajaan</h2>
            <table>
            <tr>
                <td>Nama</td>
                <td><?php echo $_SESSION["nama"];?>></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td><?php echo $_SESSION["NIK"];?></td>
            </tr>
            <tr>
                <td>Tanggal Peminjaman</td>
                <td><?php echo $_COOKIE["peminjaman"];?></td>
            </tr>
            <tr>
                <td>Tanggal pengembalian</td>
                <td><?php echo $_COOKIE["pengembalian"];?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $_SESSION["jk"];?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php echo $_SESSION["alamat"];?></td>
            </tr>
            <tr>
                <td>Peralatan Sewa : </td>
            </tr>
            <tr>
                <td>Tenda</td>
                <td><?php echo $_COOKIE["tenda"];?></td>
            </tr>
            <tr>
                <td>Kompor</td>
                <td><?php echo $_COOKIE["kompor"];?></td>
            </tr>
            <tr>
                <td>Tikar</td>
                <td><?php echo $_COOKIE["tikar"];?></td>
            </tr>
            <tr>
                <td>Terpal</td>
                <td><?php echo $_COOKIE["terpal"];?></td>
            </tr>
            <tr>
                <td>Peralatan Masak</td>
                <td><?php echo $_COOKIE["setmasak"];?></td>
            </tr>
            <tr>
                <td>Tas Gunung/ Carrier</td>
                <td><?php echo $_COOKIE["tas"];?></td>
            </tr>
            <tr>
                
                <td>
                </td>
            </tr>
            
        </tr>
    </table>
</body>
</html>