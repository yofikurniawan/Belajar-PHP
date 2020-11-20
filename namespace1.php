<html>
<head>
   <title>Namespace</title>
</head>
<body>
<h2>Demo membuat namespace (Bagian 1)</h2>

<?php
  include("NSDuaDimensi.php");
  
  // membuat objek dari kelas Segiempat
  $obj1 = new NSDuaDimensi\Segiempat(10,8);
  
  // membuat objek dari kelas Segitiga
  $obj2 = new NSDuaDimensi\Segitiga(5,3);
  
  // membuat objek dari kelas Lingkaran
  $obj3 = new NSDuaDimensi\Lingkaran(4);
  
  echo "Luas segiempat = " . $obj1->hitungLuas() . "<br />";
  echo "Luas segitiga = " . $obj2->hitungLuas() . "<br />";
  echo "Luas lingkaran = " . $obj3->hitungLuas();
  
?>

</body>
</html>
