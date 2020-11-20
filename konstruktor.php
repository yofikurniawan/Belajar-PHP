<html>
<head>
   <title>Membuat Konstruktor </title>
</head>
<body>
<h2>Demo membuat konstruktor</h2>

<?php
  // mendefinisikan kelas
  class PersegiPanjang {
    // mendeklarasikan properti
    private $panjang;
    private $lebar;
    // mendefinisikan konstruktor
    public function __construct($p, $l) {
      $this->panjang = $p;
      $this->lebar = $l;
    }
    public function getPanjang() {
      return $this->panjang;
    }
    public function getLebar() {
      return $this->lebar;
    }
    public function hitungLuas() {
      return $this->panjang * $this->lebar;
    }
    public function cetakLuas() {
      echo "Luas persegi panjang = " .
           $this->hitungLuas() . "<br/>";
    }
  }

  // membuat objek
  $obj1 = new PersegiPanjang(5,3);
  $obj2 = new PersegiPanjang(8,6);

  // menampilkan luas
  $obj1->cetakLuas();
  $obj2->cetakLuas();  
?>

</body>
</html>
