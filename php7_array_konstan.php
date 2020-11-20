<html>
<head>
   <title>Fitur PHP 7</title>
</head>
<body>
<h2>Demo membuat array konstan</h2>

<?php

// gaya PHP 5.6
const HARI = ['Minggu','Senin','Selasa','Rabu',
              'Kamis','Jumat','Sabtu'];
echo "<strong>Gaya PHP 5.6:</strong><br />";
print_r(HARI);
echo "<br /><br />";

// gaya PHP 7
define('BULAN', ['Januari','Februari','Maret','April',
                 'Mei','Juni','Juli','Agustus',
                 'September','Oktober','November','Desember']);
echo "<strong>Gaya PHP 7:</strong><br />";
print_r(BULAN);              
              
?>

</body>
</html>
