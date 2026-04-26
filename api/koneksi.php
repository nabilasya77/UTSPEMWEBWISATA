<?php
$host = ''; 
$port = 3306; 
$user = '';
$pass = '';
$db   = 'db_wisata';

$koneksi = mysqli_init();
mysqli_ssl_set($koneksi, NULL, NULL, NULL, NULL, NULL);

$real_connect = mysqli_real_connect(
    $koneksi, 
    $host, 
    $user, 
    $pass, 
    $db, 
    $port, 
    NULL, 
    MYSQLI_CLIENT_SSL
);

if (!$real_connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>