<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama_gedung = $_POST["nama_gedung"];
  $nama_lantai = $_POST["nama_lantai"];
  $nama_ruang = $_POST["nama_ruang"];
  $kode_rak = $_POST["kode_rak"];
  $nama_rak = $_POST["nama_rak"];
  $kapasitas = $_POST["kapasitas"];
  $keterangan = $_POST["keterangan"];

  echo "<div style='border: 1px solid black; padding: 10px;'>";
  echo "Nama Gedung: $nama_gedung<br>";
  echo "Nama Lantai: $nama_lantai<br>";
  echo "Nama Ruang: $nama_ruang<br>";
  echo "Kode Rak: $kode_rak<br>";
  echo "Nama Rak:  $nama_rak<br>";
  echo "Kapasitas: $kapasitas<br>";
  echo "Keterangan: $keterangan<br>";
  echo "</div>";
}
?>