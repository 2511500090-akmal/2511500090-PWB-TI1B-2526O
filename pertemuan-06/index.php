<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    
        <link rel="stylesheet" href="style.css"
</head>
<body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toogle" id="menuToogle" aria-label="Toogle Navigation"> 
            &#9776;
        </button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>Ini Contoh Paragraf HTML.</p>
            <?php
            echo "Halo Dunia!<br>";
            echo "Nama Saya Akmal Fadhillah Dwiputra";
            ?>
        </section>

            <?php
            $nim             = "2511500090";
            $nama_lengkap    = "Akmal Fadhillah Dwiputra";
            $tempat_lahir    = "Pangkalpinang";
            $tanggal_lahir   = "29 Oktober 2004";
            $hobi            = "Push Rank ML🎮";
            $pasangan        = "Fitriani💞";
            $pekerjaan       = "Bantu orang tua🍔";
            $nama_orang_tua  = "Firta Karini👩‍🦰 dan Defiar Fitriansyah👨‍🦰";
            $nama_kakak      = "Revia Defika👩‍🎓";
            $nama_adek       = "Nabilla Nasywa dan Rayya Azalea";
      ?>

        </section id="about">
            <p><strong>NIM:</strong>$nim</p>
            <p><strong>Nama Lengkap:</strong>$nama_lengkap</p>
            <p><strong>Tempat Lahir:</strong>$tempat_lahir</p>
            <p><strong>Tanggal Lahir:</strong>$tanggal_lahir</p>
            <p><strong>Hobby:</strong>$hobi</p>
            <p><strong>Pasangan:</strong>$pasangan</p>
            <p><strong>Pekerjaan:</strong>$pekerjaan</p>
            <p><strong>Nama Orang Tua:</strong>$nama_orang_tua</p>
            <p><strong>Nama Kakak:</strong>$nama_kakak</p>
            <p><strong>Nama Adek:</strong>$nama_adek</p>
        </section>

        </section id="ipk">
         <?php
        $namaMatkul1= "";
        $namaMatkul2= "";
        $namaMatkul3= "";
        $namaMatkul4= ""; 
        $namaMatkul5= "";

$sksMatkul1= "";
$sksMatkul2= "";
$sksMatkul3= "";
$sksMatkul4= "";
$sksMatkul5= "";

$nilaiHadir1= ""; 
$nilaiHadir2= ""; 
$nilaiHadir3= ""; 
$nilaiHadir4= "";
$nilaiHadir5= "";

$nilaiTugas1= ""; 
$nilaiTugas2= ""; 
$nilaiTugas3= ""; 
$nilaiTugas4= ""; 
$nilaiTugas5= "";

$nilaiUTS1= ""; 
$nilaiUTS2= ""; 
$nilaiUTS3= ""; 
$nilaiUTS4= ""; 
$nilaiUTS5= "";

$nilaiUAS1= ""; 
$nilaiUAS2= ""; 
$nilaiUAS3= ""; 
$nilaiUAS4= ""; 
$nilaiUAS5= "";

        <section id="contact">
            <h2>Kontak Kami</h2>
            <form action="#" method="GET">
                <div class="form-group">
                    <label for="txtNama">Nama:</label>
                    <input maxlength="30" type="text" id="txtNama" name="txtNama" placeholder="Masukkan Nama" required autocomplete="name">
                </div>

                <div class="form-group">
                    <label for="txtEmail">Email:</label>
                    <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan Email" required autocomplete="email">
                </div>

                <div class="form-group">
                    <label for="txtPesan"><span>Pesan Anda:</span>
                        <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
                        <small id="charCount">0/200 karakter</small>
                    </label>

                <div class="button-group">
                    <button type="submit">Kirim</button>
                    <button type="reset">Batal</button>
                </div>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Akmal Fadhillah Dwiputra [2511500090]</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
