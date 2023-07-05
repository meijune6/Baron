<?php
require 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) == 1) {
    header('Location: index.php');
    exit;
}
else{
    header('Location: masuk.php');
}