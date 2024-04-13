<?php
$input = $_POST['input'];
$email = $_POST['email'];
$input = htmlspecialchars($input,ENT_QUOTES,'UTF-8');

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email anada($email) valid";
    echo "berikut input anda ";
    echo "$input";
} else {
    echo "email anda ($emial) tidak valid";
    echo "berikut inputan anda";
    echo "($input)";
}
?>