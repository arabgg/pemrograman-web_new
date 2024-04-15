<?php
session_start();
?>
<html>

<head>
    <title>formulir</title>
    <link rel="stylesheet" href="background1.css" type="text/css">
</head>

<body class="container">
    <div class="form">

    <h3>Data Peminjaman Peralatan Camping</h3>

    <form action="server.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td><input type="text" name="NIK" id="NIK"></td>
            </tr>
            <tr>
                <td>Tanggal Peminjaman</td>
                <td><input type="date" name="peminjaman" id="peminjaman"></td>
            </tr>
            <tr>
                <td>Tanggal pengembalian</td>
                <td><input type="date" name="pengembalian" id="pengembalian"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" value="laki-laki" name="jk" id="jk">laki-laki
                    <input type="radio" value="perempuan" name="jk" id="jk">perempuan
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" id="alamat"></td>
            </tr>
            <tr>
                <td>Peralatan Sewa : </td>
            </tr>
            <tr>
                <td>Tenda</td>
                <td><input type="checkbox" value="no" name="tenda">no
                    <input type="checkbox" value="kapasitas 1 org" name="tenda">kapasiatas 1 org
                    <input type="checkbox" value="kapasitas 2 org" name="tenda">kapasiatas 2 org
                    <input type="checkbox" value="kapasitas 3 org" name="tenda">kapasiatas 3 org
                    <input type="checkbox" value="kapasitas 4 org" name="tenda">kapasiatas 4 org
                    <input type="checkbox" value="kapasitas 5 org" name="tenda">kapasiatas 5 org
                    <input type="checkbox" value="kapasitas 6 org" name="tenda">kapasiatas 6 org
                </td>
            </tr>
            <tr>
                <td>Kompor</td>
                <td><input type="checkbox" value="besar" name="kompor" id="kompor">besar
                    <input type="checkbox" value="kecil" name="kompor" id="kompor">keci
                </td>
            </tr>
            <tr>
                <td>Tikar</td>
                <td><select name="tikar">
                        <option>no</option>
                        <option>2x2</option>
                        <option>3x3</option>
                        <option>4x4</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Terpal</td>
                <td><input type="radio" value="yes" name="terpal" id="terpal">yes
                    <input type="radio" value="no" name="terpal" id="terpal">no
                </td>
            </tr>
            <tr>
                <td>Peralatan Masak</td>
                <td><input type="radio" value="yes" name="setmasak" id="setmasak">yes
                    <input type="radio" value="no"name="setmasak" id="setmasak">no
                </td>
            </tr>
            <tr>
                <td>Tas Gunung/ Carrier</td>
                <td><input type="radio" value="yes" name="tas">yes
                    <input type="radio" value="no" name="tas">no
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan">
                    <input type="reset" value="Reset">
                    <input type="button" value="Kembali">
                </td>
            </tr>
        </table>

    </form>
</div>
</body>

</html>