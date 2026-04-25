<?php
// 1. Data dari TiDB Cloud (WAJIB DIISI)
$host = ''; 
$port = 3306                                       
$user = '';                                    
$pass = '';                                   
$db   = 'db_wisata';                                     

// 2. Inisialisasi mysqli
$koneksi = mysqli_init();

// 3. Pengaturan SSL (Wajib untuk TiDB Cloud)
mysqli_ssl_set($koneksi, NULL, NULL, NULL, NULL, NULL);

// 4. Proses Koneksi
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

// 5. Cek apakah berhasil
if (!$real_connect) {
    die("Koneksi ke TiDB Cloud gagal: " . mysqli_connect_error());
}


?>