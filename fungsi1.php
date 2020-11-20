<html>
<head>
   <title>Mendefinisikan dan Memanggil Fungsi</title>
</head>
<body>

<?php

function judul() {
  echo "<h2>Demo ke-1 mendefinisikan " .
       "dan memanggil fungsi</h2>";
}

function gabungString($kiri, $kanan) {
   return $kiri . $kanan;
}

$str1 = "Ini adalah ";
$str2 = "kalimat lengkap.";

$hasil = gabungString($str1, $str2);

judul();

echo "\$str1 : $str1<br />";
echo "\$str2 : $str2<br />";
echo "Setelah digabung : $hasil";

?>
</body>
</html>
