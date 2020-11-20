<html>
<head>
   <title>Static</title>
</head>
<body>
<h2>Demo static</h2>

<?php
  class ContohKelas {
    // membuat properti statis
    public static $objectCounter = 0;

    public function __construct() {
      self::$objectCounter++;
    }
  }

  // membuat objek pertama
  $obj1 = new ContohKelas(3);
  echo "Membuat objek pertama...<br/>";
  echo "Jumlah objek saat ini = " . 
       ContohKelas::$objectCounter .
       "<br />";

  // membuat objek kedua
  $obj2 = new ContohKelas(3);
  echo "Membuat objek kedua...<br/>";
  echo "Jumlah objek saat ini = " . 
       ContohKelas::$objectCounter .
       "<br />";

  // membuat objek ketiga
  $obj3 = new ContohKelas(3);
  echo "Membuat objek ketiga...<br/>";
  echo "Jumlah objek saat ini = " . 
       ContohKelas::$objectCounter .
       "<br />";
?>

</body>
</html>
