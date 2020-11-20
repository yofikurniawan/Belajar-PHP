<html>
<head>
   <title>Fitur PHP 7</title>
</head>
<body>
<h2>Demo menggunakan statemen use gaya PHP 7</h2>

<?php

include("MyNamespace.php");

// menggunakan statemen use
use NSBangun\NSDuaDimensi\{Segiempat, Segitiga, Lingkaran};
use NSBangun\NSTigaDimensi\{Kubus, Balok, Bola};

// DUA DIMENSI
  
// membuat objek dari kelas Segiempat
$dd1 = new Segiempat(10,8);
  
// membuat objek dari kelas Segitiga
$dd2 = new Segitiga(5,3);
  
// membuat objek dari kelas Lingkaran
$dd3 = new Lingkaran(4);
  
echo "<strong>Dua Dimensi:</strong><br />";
echo "Luas segiempat = " . $dd1->hitungLuas() . "<br />";
echo "Luas segitiga = " . $dd2->hitungLuas() . "<br />";
echo "Luas lingkaran = " . $dd3->hitungLuas();
echo "<br /><br />";
  
// TIGA DIMENSI
  
// membuat objek dari kelas Kubus
$td1 = new Kubus(5);
  
// membuat objek dari kelas Balok
$td2 = new Balok(10,8,6);
 
// membuat objek dari kelas Bola
$td3 = new Bola(4);
  
echo "<strong>Tiga Dimensi:</strong><br />";
echo "Volume kubus = " . $td1->hitungVolume() . "<br />";
echo "Volume balok = " . $td2->hitungVolume() . "<br />";
echo "Volume bola = " . $td3->hitungVolume();
  
?>

</body>
</html>
