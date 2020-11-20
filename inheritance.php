<html>
<head>
   <title>Pewarisan</title>
</head>
<body>
<h2>Demo membuat kelas turunan</h2>

<?php
  // membuat kelas induk
  class A {    
    private $a;

    public function __construct($a) {
      $this->a = $a;
    }
    public function setA($a) {
      $this->a = $a;
    }
    public function getA() {
      return $this->a;
    }
  }

  // membuat kelas turunan
  class B extends A {    
    private $b;

    public function __construct($a, $b) {
      parent::__construct($a);
      $this->b = $b;
    }
    public function setB($b) {
      $this->b = $b;
    }
    public function getB() {
      return $this->b;
    }
  }

  // membuat objek dari kelas turunan
  $t = new B(10, 20);

  // menampilkan nilai awal
  echo "KEADAAN AWAL:<br/>";
  echo "\$t->getA(): " . $t->getA() . "<br/>";
  echo "\$t->getB(): " . $t->getB() . "<br/>";

  // mengubah nilai
  $t->setA(1000);
  $t->setB(2000);

  // menampilkan nilai akhir
  echo "<br/>KEADAAN AKHIR:<br/>";
  echo "\$t->getA(): " . $t->getA() . "<br/>";
  echo "\$t->getB(): " . $t->getB() . "<br/>";
?>

</body>
</html>
