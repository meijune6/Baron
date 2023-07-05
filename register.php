<?php
require 'koneksi.php';
$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];

$query = "INSERT INTO user (nama, email, password) VALUES ('$nama', '$email', '$password')";

    if (mysqli_query($connection, $query)) {
        header("Location: masuk.php");
    }else {
        echo "pendaftaran gagal : " . mysqli_error($connection);
    }