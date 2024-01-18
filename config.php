<?php
$host = "localhost";
$database = "db_uts";
$user = "root";
$pass = "";

$koneksi=mysqli_connect($host, $user, $pass);

if($koneksi){
    $buka=mysqli_select_db ($koneksi, $database);
    echo "Database terhubung";
    if (!$buka){
        echo "Database tidak terhubung";
    }
} else {
    echo "Mysql tidak terhubung";
}
?>