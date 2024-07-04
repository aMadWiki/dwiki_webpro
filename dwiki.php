<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Barang</title>
</head>
<body>
<form action="panggildwiki.php" method="post">
  <h2> Pembelian Produk </h2>
  <label for="Product_Type">Product Type:</label><br>
  <select name="Product_Type"> 
    <option value="WIP">Pilih Tipe Produk</option>
    <option value="DONE">SELESAI</option>
    <option value="DONE">RAKIT SENDIRI</option>
  </select><br>
  <label for="nama_product">Product:</label><br>
  <select name="nama_product"> 
    <option value="Produk Kasar">Produk Kasar</option>
    <option value="Produk Lunak">Produk Lunak</option>
  </select><br>
  <label for="Cost_Product_Code">Cost Product Code:</label><br>
  <input type="Text" id="Cost_Product_Code" name="Cost_Product_Code" required><br>
  <label for="QTY">QTY:</label><br>
  <input type="number" id="QTY" name="QTY" required><br>
  <label for="Unit">UNIT:</label><br>
  <select name="Unit"> 
    <option value="Kotak">Kotak</option>
    <option value="Bulat">Bulat</option>
  </select><br>
  <label for="Price">Price:</label><br>
  <input type="number" id="Price" name="Price" required><br>
  <label for="SubTotal">SubTotal:</label><br>
  <input type="number" id="SubTotal" name="SubTotal" required><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>