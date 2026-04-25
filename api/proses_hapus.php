<?php
session_start();
require 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query_hapus = "DELETE FROM destinasi WHERE id = '$id'";

    if (mysqli_query($koneksi, $query_hapus)) {
        header("Location: admin_wisata.php?status=sukses_hapus");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    header("Location: admin_wisata.php");
}
?>