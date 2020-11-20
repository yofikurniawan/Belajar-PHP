<html>
<head>
   <title>Cloning</title>
</head>
<body>
<h2>Demo membuat salinan objek</h2>

<?php
  class Lingkaran {
    const PI = 3.14;
    private $jarijari;
    public function __construct($r) {
      $this->jarijari = $r;
    }
    public function setJarijari($r) {
      $this->jarijari = $r;
    }
    public function getJarijari() {
      return $this->jarijari;
    }
    public function hitungLuas() {
      return self::PI * $this->jarijari *
             $this->jarijari;
    }
    public function cetakLuas() {
      echo "Luas lingkaran = " .
           $this->hitungLuas() .
           "<br />";
    }
  }

  // membuat objek
  $obj1 = new Lingkaran(3);

  // $obj2 menunjuk ke $obj1
  $obj2 = $obj1;

  // membuat salinan $obj1
  $obj3 = clone $obj1;

  echo "KEADAAN AWAL<br/>";
  echo "\$obj1: ";
  $obj1->cetakLuas();
  echo "\$obj2: ";
  $obj2->cetakLuas();
  echo "\$obj3: ";
  $obj3->cetakLuas();

  // mengubah jari-jari ke dalam $obj1
  $obj1->setJarijari(5);

  echo "<br/>KEADAAN AKHIR<br/>";
  echo "\$obj1: ";
  $obj1->cetakLuas();
  echo "\$obj2: ";
  $obj2->cetakLuas();
  echo "\$obj3: ";
  $obj3->cetakLuas();
?>

</body>
</html>
