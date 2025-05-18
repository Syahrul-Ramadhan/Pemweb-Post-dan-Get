<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RakitinAja</title>
    <link rel="stylesheet" href="stylePost.css">
</head>
<body>
    <a href="../tugas.php" class="backBtn home">Kembali ke Halaman Utama</a>

    <div class="container">
        <h2>Selamat Datang di RakitinAja.</h2>
        <h4>Solusi Lengkap untuk Merakit PC Impian Anda.</h4>
        <p>Kami menyediakan berbagai komponen PC berkualitas serta layanan perakitan profesional dan terpercaya. 
            Bangun PC sesuai kebutuhan Anda — gaming, editing, ataupun kebutuhan kerja — semua bisa di RakitinAja!</p>
    
            <form action="prosesPost.php" method="post">
            <h3>Data Diri</h3>
            <div class="header">
                <input type="text" name="nama" placeholder="Nama lengkap" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <textarea name="alamat" placeholder="Alamat lengkap" required></textarea>

            <h3>Rakit PC</h3>
            <label>Processor:</label><br>
            <input type="radio" name="cpu" value="Intel"> Intel<br>
            <input type="radio" name="cpu" value="AMD"> AMD<br><br>

            <label>RAM:</label><br>
            <select name="ram">
                <option selected disabled>Pilih RAM</option>
                <option value="8GB">8GB</option>
                <option value="16GB">16GB</option>
            </select><br><br>

            <label>Storage:</label><br>
            <input type="radio" name="storage" value="SSD"> Solid State Drive<br>
            <input type="radio" name="storage" value="HDD"> Hard Disk Drive<br><br>

            <label>VGA:</label><br>
            <select name="vga">
                <option selected disabled>Pilih VGA</option>
                <option value="RTX 3060">RTX 3060</option>
                <option value="RX 6600">RX 6600</option>
            </select><br><br>

            <label>PSU:</label><br>
            <input type="radio" name="psu" value="550W"> 550W<br>
            <input type="radio" name="psu" value="750W"> 750W<br>
            <input type="radio" name="psu" value="1000W"> 1000W<br>

            <button type="submit" name="submit">Kirim</button>
            </form>
    </div>
</body>
</html>