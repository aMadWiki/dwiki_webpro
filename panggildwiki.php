<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Product_Type = $_POST["Product_Type"];
  $nama_product = $_POST["nama_product"];
  $Cost_Product_Code = $_POST["Cost_Product_Code"];
  $QTY = $_POST["QTY"];
  $Unit = $_POST["Unit"];
  $Price = $_POST["Price"];
  $SubTotal = $_POST["SubTotal"];

  echo "Nama Tipe Product: $Product_Type<br>";
  echo "Nama Produk: $nama_product<br>";
  echo "Cost Product Code: $Cost_Product_Code<br>";
  echo "Quantity:  $QTY<br>";
  echo "Unit: $Unit<br>";
  echo "Harga: $Price<br>";
  echo "Sub Total: $SubTotal<br>";
}
?>