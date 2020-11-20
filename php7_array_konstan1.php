<html>
<head>
   <title>Fitur PHP 7</title>
</head>
<body>
<h2>Demo menggunakan array konstan</h2>

<?php

define('BULAN', ['Januari','Februari','Maret','April',
                 'Mei','Juni','Juli','Agustus',
                 'September','Oktober','November','Desember']);

// array normal (non-konstan)
$daftarTanggal = ['2016-03-01','2016-04-02','2016-05-03','2016-06-04'];

foreach ($daftarTanggal as $tanggal) {
  $d = substr($tanggal,8);
  $m = substr($tanggal,5,2);
  $y = substr($tanggal,0,4);
  printf("%s %s %s<br />", $d, BULAN[intval($m-1)], $y); 
}
                 
?>

</body>
</html>
