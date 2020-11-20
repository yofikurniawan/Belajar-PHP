<html>
<head>
   <title>ltrim() dan trim()</title>
</head>
<body>
<h2>Demo menghilangkan spasi di bagian awal 
    dan akhir string</h2>

<?php
  echo "<strong>Menggunakan ltrim():</strong><br />";

  $str1 = "   Modul Praktikum Pemrograman Web";
  echo "\$str1: $str1<br />";
  echo "Panjang karakter: " . strlen($str1);
  echo "<br />";

  $s1 = ltrim($str1);
  echo "\$s1: $s1<br />";
  echo "Panjang karakter: " . strlen($s1);
  echo "<br /><br />";

  echo "<strong>Menggunakan trim():</strong><br />";

  $str2 = "   Modul Praktikum Pemrograman Web   ";
  echo "\$str2: $str2<br />";
  echo "Panjang karakter: " . strlen($str2);
  echo "<br />";

  $s2 = trim($str2);
  echo "\$s2: $s2<br />";
  echo "Panjang karakter: " . strlen($s2);
?>

</body>
</html>
