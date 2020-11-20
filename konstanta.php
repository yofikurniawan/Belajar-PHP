<html>
<head>
   <title>Konstanta</title>
</head>
<body>
<h2>Demo mendefinisikan konstanta</h2>

<?php
// mendefinisikan konstanta
define('MAKSIMAL', 1000);
define('NAMA_PERUSAHAAN', "PT. Multidimension Group");
define('PI', 3.1416);

// mencetak nilai konstanta ke layar browser
echo MAKSIMAL . "<br />";
echo NAMA_PERUSAHAAN . "<br />";

// menggunakan konstanta dalam perhitungan
$jarijari = 2;
$luasLingkaran = PI * $jarijari * $jarijari;
echo "Luas Lingkaran = " . $luasLingkaran;
?>

</body>
</html>
