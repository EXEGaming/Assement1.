<!DOCTYPE html>
<html>
  <head>
    <title>Hasil Kalkulator</title>
  </head>
  <body>
    <?php
      // Ambil nilai dari form HTML
      $angka1 = $_POST["angka1"];
      $angka2 = $_POST["angka2"];
      $operator = $_POST["operator"];

      // Lakukan operasi aritmatika sesuai dengan operator
      if ($operator == "+") {
        $hasil = $angka1 + $angka2;
      } else if ($operator == "-") {
        $hasil = $angka1 - $angka2;
      } else if ($operator == "*") {
        $hasil = $angka1 * $angka2;
      } else if ($operator == "/") {
        $hasil = $angka1 / $angka2;
      } else {
        $hasil = "Operator tidak valid";
      }

      // Tampilkan hasil operasi aritmatika
      echo "<h1>Hasil: $hasil</h1>";
    ?>
  </body>
</html>