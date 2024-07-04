<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 20px;
        }
        form {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
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
    <option value="Anda Belum Pilih">Pilih Gedung Anda</option>
    <option value="Gedung A">Gedung A</option>
    <option value="Gedung B">Gedung B</option>
  </select><br>

  <label for="nama_lantai">Nama Lantai</label><br>
  <select name="nama_lantai"> 
    <option value="Anda Belum Pilih">Pilih Lantai Anda</option>
    <option value="Lantai 1">Lantai 1</option>
    <option value="Lantai 2">Lantai 2</option>
    <option value="Lantai 3">Lantai 3</option>
  </select><br>
  
  <label for="nama_ruang">Nama Ruang</label><br>
  <select name="nama_ruang"> 
    <option value="Anda belum Pilih">Pilih Ruang Anda</option>
    <option value="101">101</option>
    <option value="102">102</option>
    <option value="201">201</option>
    <option value="202">202</option>
    <option value="301">301</option>
    <option value="302">302</option>
  </select><br>

  <label for="kode_rak">Kode Rak</label><br>
  <input type="number" id="kode_rak" name="kode_rak" required><br>

  <label for="nama_rak">Nama Rak</label><br>
  <input type="text" id="nama_rak" name="nama_rak" required><br>

  <label for="kapasitas">Kapasitas (Baris)</label><br>
  <input type="number" id="kapasitas" name="kapasitas" required><br>

  <label for="keterangan">Keterangan</label><br>
  <textarea rows="5" name="keterangan"></textarea>

  <div class="button-container">
    <input type="submit" name="Simpan" value="Submit">
    <input type="reset" name="Tutup" value="Reset">
  </div>
</form>
</body>
</html>
