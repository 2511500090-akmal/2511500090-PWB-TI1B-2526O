<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nim            = $_POST["nim"];
  $nama_lengkap   = $_POST["nama"];
  $tempat_lahir   = $_POST["tempat_lahir"];
  $tanggal_lahir  = $_POST["tanggal_lahir"];
  $hobi           = $_POST["hobi"];
  $pasangan       = $_POST["pasangan"];
  $pekerjaan      = $_POST["pekerjaan"];
  $nama_ortu      = $_POST["nama_ortu"];
  $nama_kakak     = $_POST["nama_kakak"];
  $nama_adik      = $_POST["nama_adik"];

  $_SESSION["nim"]           = $nim;
  $_SESSION["nama_lengkap"]  = $nama_lengkap;
  $_SESSION["tempat_lahir"]  = $tempat_lahir;
  $_SESSION["tanggal"]       = $tanggal;
  $_SESSION["hobi"]          = $hobi;
  $_SESSION["pasangan"]      = $pasangan;
  $_SESSION["pekerjaan"]     = $pekerjaan;
  $_SESSION["nama_ortu"]     = $nama_ortu;
  $_SESSION["nama_kakak"]    = $nama_kakak;
  $_SESSION["nama_adik"]     = $nama_adik;

  header("Location: index.php#about");
  exit;
}