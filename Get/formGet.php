<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Alat</title>
    <link rel="stylesheet" href="styleGet.css">
</head>
<body>
    <a href="../tugas.php" class="backBtn home">Kembali ke Halaman Utama</a>
    
    <div class="container">
        <h2>Formulir Peminjaman Alat</h2>
        <h4>Silakan isi data diri dan detail alat yang ingin dipinjam</h4>
        <p>Form ini digunakan untuk mencatat peminjaman alat seperti proyektor, laptop, atau kamera. Mohon isi dengan lengkap dan benar.</p>
    
        <form action="prosesGet.php" method="get">
            <h3>Data Diri</h3>
            <div class="header">
                <input type="text" name="nama" placeholder="Nama lengkap" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <textarea name="alamat" placeholder="Alamat lengkap" required></textarea>

            <h3>Detail Peminjaman</h3>
            
            <label>Jenis Alat:</label>
            <input type="radio" name="alat" value="Proyektor"> Proyektor<br>
            <input type="radio" name="alat" value="Laptop"> Laptop<br>
            <input type="radio" name="alat" value="Kamera"> Kamera<br><br>

            <label>Durasi Peminjaman:</label>
            <select name="durasi">
                <option selected disabled>Pilih Durasi</option>
                <option value="1 Hari">1 Hari</option>
                <option value="3 Hari">3 Hari</option>
                <option value="1 Minggu">1 Minggu</option>
            </select><br><br>

            <label>Keperluan:</label>
            <textarea name="keperluan" placeholder="Contoh: Kegiatan seminar, dokumentasi, dll." required></textarea><br>

            <button type="submit" name="submit">Kirim</button>
        </form>
    </div>
</body>
</html>