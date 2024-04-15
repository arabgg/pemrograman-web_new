<?php
session_start();
$correctUsername = "admin";
$correctPassword = "rahasia";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username'];
    $password = $_POST['password'];

    if ($username == $correctUsername && $password == $correctPassword) {
        $_SESSION['Username'] = $username;
        header("location: form.php");
    } else {
        echo "<script>alert('Invalid username or password. Please try again.');</script>";
    }
}

?>
<!DOCTYPE HTML>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="background1.css" >
    <script src="jquery-3.7.1.js"></script>
</head>

<body>
    <div class="container">
    <div id="box" class="form">
    <h1>Camp Black Hole</h1>
        <form  method="POST">
            <label>
                Username/Email:
                <input type="text" name="Username" id="username" required placeholder="example@email.com"><br>
            </label>
            <label>
                Password:
                <input type="password" name="password" id="password" required placeholder=""><br>
            </label>
            <input type="submit" value="Login" class="loginbutton">
        </form>
    </div>
    </div>
    <script src="javaScript.js"></script>
</body>

</html>
