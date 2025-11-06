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
        $namaMatkul1= "Algoritma dan Struktur Data";
        $namaMatkul2= "Agama";
        $namaMatkul3= "Kalkulus";
        $namaMatkul4= "Logika Informatika"; 
        $namaMatkul5= "Aplikasi Perkantoran";

        $sksMatkul1= 4;
        $sksMatkul2= 2;
        $sksMatkul3= 4;
        $sksMatkul4= 4;
        $sksMatkul5= 4;

        if ($nilaiHadir1 < 70):
        $grade1 = "E";
      endif;
      if ($nilaiHadir2 < 70):
        $grade2 = "E";
      endif;
      if ($nilaiHadir3 < 70):
        $grade3 = "E";
      endif;
      if ($nilaiHadir4 < 70):
        $grade4 = "E";
      endif;
      if ($nilaiHadir5 < 70):
        $grade5 = "E";
      endif;

        $nilaiHadir1= 90; 
        $nilaiHadir2= 90; 
        $nilaiHadir3= 85; 
        $nilaiHadir4= 100;
        $nilaiHadir5= 100;

        $nilaiTugas1= 60; 
        $nilaiTugas2= 70; 
        $nilaiTugas3= 90; 
        $nilaiTugas4= 80; 
        $nilaiTugas5= 100;

        $nilaiUTS1= 80; 
        $nilaiUTS2= 90; 
        $nilaiUTS3= 75; 
        $nilaiUTS4= 80; 
        $nilaiUTS5= 100;

        $nilaiUAS1= 70; 
        $nilaiUAS2= 85; 
        $nilaiUAS3= 90; 
        $nilaiUAS4= 80; 
        $nilaiUAS5= 90;

        $nilaiAkhir1= (0.1 * $nilaiHadir1) + (0.2 * $nilaiTugas1) + (0.3 * $nilaiUTS1) + (0.4 * $nilaiUAS1); 
        $nilaiAkhir2= (0.1 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2); 
        $nilaiAkhir3= (0.1 * $nilaiHadir3) + (0.2 * $nilaiTugas3) + (0.3 * $nilaiUTS3) + (0.4 * $nilaiUAS3); 
        $nilaiAkhir4= (0.1 * $nilaiHadir4) + (0.2 * $nilaiTugas4) + (0.3 * $nilaiUTS4) + (0.4 * $nilaiUAS4); 
        $nilaiAkhir5= (0.1 * $nilaiHadir5) + (0.2 * $nilaiTugas5) + (0.3 * $nilaiUTS5) + (0.4 * $nilaiUAS5);

        $grade1= ""; 
        $grade2= ""; 
        $grade3= "";
        $grade4= ""; 
        $grade5= "";

        $mutu1= ""; 
        $mutu2= ""; 
        $mutu3= ""; 
        $mutu4= ""; 
        $mutu5= "";

        $bobot1 = $mutu1 * $sksMatkul1;
        $bobot2 = $mutu2 * $sksMatkul2;
        $bobot3 = $mutu3 * $sksMatkul3;
        $bobot4 = $mutu4 * $sksMatkul4;
        $bobot5 = $mutu5 * $sksMatkul5;

        switch ($grade1):
        case "A": $status1 = "LULUS"; break;
        case "A-": $status1 = "LULUS"; break;
        case "B+": $status1 = "LULUS"; break;
        case "B": $status1 = "LULUS"; break;
        case "B-": $status1 = "LULUS"; break;
        case "C+": $status1 = "LULUS"; break;
        case "C": $status1 = "LULUS"; break;
        case "C-": $status1 = "LULUS"; break;
        case "D":
        case "E":
          $status1 = "GAGAL";
          break;
      endswitch;

      switch ($grade2):
        case "A":
          $status2 = "LULUS";
          break;
        case "A-":
          $status2 = "LULUS";
          break;
        case "B+":
          $status2 = "LULUS";
          break;
        case "B":
          $status2 = "LULUS";
          break;
        case "B-":
          $status2 = "LULUS";
          break;
        case "C+":
          $status2 = "LULUS";
          break;
        case "C":
          $status2 = "LULUS";
          break;
        case "C-":
          $status2 = "LULUS";
          break;
        case "D":
        case "E":
          $status2 = "GAGAL";
          break;
      endswitch;

      switch ($grade3):
        case "A":
          $status3 = "LULUS";
          break;
        case "A-":
          $status3 = "LULUS";
          break;
        case "B+":
          $status3 = "LULUS";
          break;
        case "B":
          $status3 = "LULUS";
          break;
        case "B-":
          $status3 = "LULUS";
          break;
        case "C+":
          $status3 = "LULUS";
          break;
        case "C":
          $status3 = "LULUS";
          break;
        case "C-":
          $status3 = "LULUS";
          break;
        case "D":
        case "E":
          $status3 = "GAGAL";
          break;
      endswitch;

      switch ($grade4):
        case "A":
          $status4 = "LULUS";
          break;
        case "A-":
          $status4 = "LULUS";
          break;
        case "B+":
          $status4 = "LULUS";
          break;
        case "B":
          $status4 = "LULUS";
          break;
        case "B-":
          $status4 = "LULUS";
          break;
        case "C+":
          $status4 = "LULUS";
          break;
        case "C":
          $status4 = "LULUS";
          break;
        case "C-":
          $status4 = "LULUS";
          break;
        case "D":
        case "E":
          $status4 = "GAGAL";
          break;
      endswitch;

      switch ($grade5):
        case "A":
          $status5 = "LULUS";
          break;
        case "A-":
          $status5 = "LULUS";
          break;
        case "B+":
          $status5 = "LULUS";
          break;
        case "B":
          $status5 = "LULUS";
          break;
        case "B-":
          $status5 = "LULUS";
          break;
        case "C+":
          $status5 = "LULUS";
          break;
        case "C":
          $status5 = "LULUS";
          break;
        case "C-":
          $status5 = "LULUS";
          break;
        case "D":
        case "E":
          $status5 = "GAGAL";
          break;
      endswitch;

        $totalBobot = $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5;
        $totalSKS = $sksMatkul1 + $sksMatkul2 + $sksMatkul3 + $sksMatkul4 + $sksMatkul5;

        $IPK= $totalBobot / $totalSKS;

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
