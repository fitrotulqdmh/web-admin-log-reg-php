<?php
require 'config.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "INSERT INTO login (username, password) VALUES ('$username','$password')";

if (mysqli_query($koneksi, $query_sql)) {
    header("Location: index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}

?>