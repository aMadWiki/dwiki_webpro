<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 20px;
        }

        form {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        label {
            font-weight: bold;
        }

        select, input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;s
        }
    </style>
</head>
<body>
<form action="untukpanggiltest.php" method="post">
  <h2>Tambah Data Rak</h2>
  <label for="nama_gedung">Nama Gedung:</label><br>
  <select name="nama_gedung"> 
    <option value="pilih gedung">Pilih Gedung Anda</option>
    <option value="gedung1">Gedung A</option>
    <option value="gedung2">Gedung B</option>
  </select><br>

  <label for="nama_lantai">Nama Lantai:</label><br>
  <select name="nama_lantai"> 
    <option value="pilih lantai">Pilih Lantai Anda</option>
    <option value="pilihlantai1">Lantai 1</option>
    <option value="pilihlantai2">Lantai 2</option>
    <option value="pilihlantai3">Lantai 3</option>
  </select><br>
  
  <label for="nama_ruang">Nama Ruang:</label><br>
  <select name="nama_ruang"> 
    <option value="pilihan">Pilih Ruang Anda</option>
    <option value="pilihan1">101</option>
    <option value="pilihan2">102</option>
    <option value="pilihan3">201</option>
    <option value="pilihan4">202</option>
    <option value="pilihan5">301</option>
    <option value="pilihan6">302</option>
  </select><br>

  <label for="kode_rak">Kode Rak:</label><br>
  <input type="number" id="kode_rak" name="kode_rak" required><br>

  <label for="nama_rak">Nama Rak:</label><br>
  <input type="text" id="nama_rak" name="nama_rak" required><br>

  <label for="kapasitas">Kapasitas (Baris):</label><br>
  <input type="number" id="kapasitas" name="kapasitas" required><br>

  <label for="keterangan">Keterangan:</label><br>
  <textarea rows="5" name="keterangan"></textarea>

  <div class="button-container">
    <input type="submit" name="Simpan" value="Submit">
    <input type="reset" name="Tutup" value="Reset">
  </div>
</form>
</body>
</html>
