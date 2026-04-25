<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><title>Selamat Datang - Wisata Wonogiri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .bg-landing {
            background: linear-gradient(rgba(17, 42, 70, 0.8), rgba(17, 42, 70, 0.8)), url('https://asset.kompas.com/crops/c77BE3vztV_nZbuGYC9o8g2zK_E=/0x0:0x0/750x500/data/photo/2024/01/27/65b5229440479.jpg') center/cover;
            height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center; color: white;
        }
    </style>
</head>
<body>
    <div class="bg-landing">
        <div class="container">
            <h1 class="display-3 fw-bold">Wisata Wonogiri</h1>
            <p class="lead mb-5">Temukan keindahan tersembunyi di Wonogiri.</p>
            <div class="d-flex justify-content-center gap-3">
                <?php if(isset($_SESSION['login'])): ?>
                    <a href="api/home.php" class="btn btn-primary btn-lg px-5 rounded-pill">Masuk ke home</a>
                <?php else: ?>
                    <a href="api/login.php" class="btn btn-primary btn-lg px-5 rounded-pill">Login</a>
                    <a href="api/register.php" class="btn btn-outline-light btn-lg px-5 rounded-pill">Daftar</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>