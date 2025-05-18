    <?php
        $nama = $_GET["nama"];
        $email = $_GET["email"];
        $alamat = $_GET["alamat"];
        $alat = $_GET["alat"] ?? 'Tidak dipilih';
        $durasi = $_GET["durasi"] ?? 'Tidak dipilih';
        $keperluan = $_GET["keperluan"] ?? 'Tidak dipilih';
    ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman</title>
    <link rel="stylesheet" href="styleGet.css">
</head>
<body>
    <div class="containerInvoice">
        <h2>Data Peminjaman Anda</h2>

        <div class="section">
            <h3>Data Diri</h3>
            <p><strong>Nama:</strong> <?= $nama ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Alamat:</strong><br><?= nl2br($alamat) ?></p>
        </div>

        <div class="section">
            <h3>Deskripsi Peminjaman</h3>
            <ul>
                <li><strong>Jenis Alat:</strong> <?= $alat ?></li>
                <li><strong>Durasi:</strong> <?= $durasi ?></li>
                <li><strong>Keperluan:</strong> <?= $keperluan ?></li>
            </ul>
        </div>

        <a href="formGet.php" class="backBtn">Kembali</a>
</body>
</html>
