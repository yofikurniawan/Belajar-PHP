<html>
<head>
   <title>Namespace</title>
</head>
<body>
<h2>Demo membuat namespace (Bagian 2)</h2>

<?php
  include("NS.php");
  
  // DUA DIMENSI
  
  // membuat objek dari kelas Segiempat
  $dd1 = new NSDuaDimensi\Segiempat(10,8);
  
  // membuat objek dari kelas Segitiga
  $dd2 = new NSDuaDimensi\Segitiga(5,3);
  
  // membuat objek dari kelas Lingkaran
  $dd3 = new NSDuaDimensi\Lingkaran(4);
  
  echo "<strong>Dua Dimensi:</strong><br />";
  echo "Luas segiempat = " . $dd1->hitungLuas() . "<br />";
  echo "Luas segitiga = " . $dd2->hitungLuas() . "<br />";
  echo "Luas lingkaran = " . $dd3->hitungLuas();
  echo "<br /><br />";
  
  // TIGA DIMENSI
  
  // membuat objek dari kelas Kubus
  $td1 = new NSTigaDimensi\Kubus(5);
  
  // membuat objek dari kelas Balok
  $td2 = new NSTigaDimensi\Balok(10,8,6);
  
  // membuat objek dari kelas Bola
  $td3 = new NSTigaDimensi\Bola(4);
  
  echo "<strong>Tiga Dimensi:</strong><br />";
  echo "Volume kubus = " . $td1->hitungVolume() . "<br />";
  echo "Volume balok = " . $td2->hitungVolume() . "<br />";
  echo "Volume bola = " . $td3->hitungVolume();
  
?>

</body>
</html>
