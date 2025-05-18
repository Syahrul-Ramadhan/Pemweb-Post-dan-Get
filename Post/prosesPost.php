<?php
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $cpu = $_POST["cpu"] ?? 'Tidak dipilih';
    $ram = $_POST["ram"] ?? 'Tidak dipilih';
    $vga = $_POST["vga"] ?? 'Tidak dipilih';
    $psu = $_POST["psu"] ?? 'Tidak dipilih';
    $storage = $_POST['storage'] ??'Tidak dipilih';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pemesanan</title>
    <link rel="stylesheet" href="stylePost.css">
</head>
<body>
    <div class="containerInvoice">
        <h2>Data Pemesanan Anda</h2>

        <div class="section">
            <h3>Data Diri</h3>
            <p><strong>Nama:</strong> <?= $nama ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Alamat:</strong><br><?= nl2br($alamat) ?></p>
        </div>

        <div class="section">
            <h3>Spesifikasi Rakitan</h3>
            <ul>
                <li><strong>Processor:</strong> <?= $cpu ?></li>
                <li><strong>RAM:</strong> <?= $ram ?></li>
                <li><strong>Storage:</strong> <?= $storage ?></li>
                <li><strong>VGA:</strong> <?= $vga ?></li>
                <li><strong>PSU:</strong> <?= $psu ?></li>
            </ul>
        </div>

        <a href="formPost.php" class="backBtn">Kembali</a>
    </div>
</body>
</html>