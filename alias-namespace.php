<html>
<head>
   <title>Namespace</title>
</head>
<body>
<h2>Demo membuat alias namespace</h2>

<?php
  include("NSBangun.php");
  
  // membuat alias
  use NSBangun\NSDuaDimensi as ns2d;
  use NSBangun\NSTigaDimensi as ns3d;
  
  // DUA DIMENSI
  
  // membuat objek dari kelas Segiempat
  $dd1 = new ns2d\Segiempat(10,8);
  
  // membuat objek dari kelas Segitiga
  $dd2 = new ns2d\Segitiga(5,3);
  
  // membuat objek dari kelas Lingkaran
  $dd3 = new ns2d\Lingkaran(4);
  
  echo "<strong>Dua Dimensi:</strong><br />";
  echo "Luas segiempat = " . $dd1->hitungLuas() . "<br />";
  echo "Luas segitiga = " . $dd2->hitungLuas() . "<br />";
  echo "Luas lingkaran = " . $dd3->hitungLuas();
  echo "<br /><br />";
  
  // TIGA DIMENSI
  
  // membuat objek dari kelas Kubus
  $td1 = new ns3d\Kubus(5);
  
  // membuat objek dari kelas Balok
  $td2 = new ns3d\Balok(10,8,6);
  
  // membuat objek dari kelas Bola
  $td3 = new ns3d\Bola(4);
  
  echo "<strong>Tiga Dimensi:</strong><br />";
  echo "Volume kubus = " . $td1->hitungVolume() . "<br />";
  echo "Volume balok = " . $td2->hitungVolume() . "<br />";
  echo "Volume bola = " . $td3->hitungVolume();
  
?>

</body>
</html>
