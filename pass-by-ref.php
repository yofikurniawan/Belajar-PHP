<html>
<head>
   <title>Melewatkan parameter</title>
</head>
<body>

<?php

function judul() {
  echo "<h2>Demo melewatkan parameter berdasarkan " .
       "referensi (pass by reference)</h2>";
}

function KaliDua(&$nilai) {
   $nilai = $nilai << 1;
}

judul();

$a = 13;
echo "\$a sebelum pemanggilan fungsi = $a<br />";

// memanggil fungsi KaliDua()
KaliDua($a);

echo "\$a setelah pemanggilan fungsi = $a";

?>
</body>
</html>
