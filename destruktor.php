<html>
<head>
   <title>Destruktor</title>
</head>
<body>
<h2>Demo destruktor (Bagian 1)</h2>

<?php
  class PersegiPanjang {
    private $panjang;
    private $lebar;
    // konstruktor
    public function __construct($p, $l) {
      $this->panjang = $p;
      $this->lebar = $l;
      echo "Konstruktor dipanggil...<br/>";
    }
    public function hitungLuas() {
      return $this->panjang * $this->lebar;
    }
    public function cetakLuas() {
      echo "Luas persegi panjang = " .
      $this->hitungLuas() . "<br/>";
    }
    // destruktor
    public function __destruct() {
      echo "Destruktor dipanggil...<br/>";
    }
  }

  // membuat objek persegi panjang
  $obj1 = new PersegiPanjang(5,3);

  // memanggil metode cetakLuas()
  $obj1->cetakLuas();

  // di akhir skrip, destruktor akan dipanggil
?>

</body>
</html>
