<html>
<head>
   <title>Mendefinisikan dan Memanggil Fungsi</title>
</head>
<body>

<?php

function judul() {
  echo "<h2>Demo ke-2 mendefinisikan " .
       "dan memanggil fungsi</h2>";
}

function KaliDua($nilai) {
   return $nilai << 1;
}

judul();

$hasil = KaliDua(13);

echo "13 dikali 2 = $hasil";

?>
</body>
</html>
