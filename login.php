<?php
require 'config.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($koneksi, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: admin/index.html");
} else {
    echo "<center><h1>Username atau Password Anda Salah. Silahkan Coba Login Kembali!</h1><button><strong><a href='index.php'>Login</a><?strong></button></center>";
}
?>
