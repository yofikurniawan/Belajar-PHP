<html>
<head>
   <title>Kelas abstrak</title>
</head>
<body>
<h2>Demo metode dan kelas abstrak</h2>

<?php
  // membuat kelas abstrak
  abstract class TigaDimensi {        
    // membuat metode abstrak
    abstract public function hitungVolume();
  }

  // membuat kelas turunan
  class Kubus extends TigaDimensi {    
    private $sisi;
    public function __construct($sisi) {
      $this->sisi = $sisi;
    }
    // implementasi hitungVolume()
    public function hitungVolume() {
      return $this->sisi * 
             $this->sisi *
             $this->sisi;
    }
  }

  // membuat kelas turunan
  class Balok extends TigaDimensi {
    private $panjang;
    private $lebar;
    private $tinggi;
    public function __construct($p,$l,$t) {
      $this->panjang = $p;
      $this->lebar = $l;
      $this->tinggi = $t;
    }
    // implementasi hitungVolume()
    public function hitungVolume() {
      return $this->panjang * 
             $this->lebar *
             $this->tinggi;
    }
  }

  // membuat objek dari kelas Kubus
  $k = new Kubus(3);
  // membuat objek dari kelas Balok
  $b = new Balok(5,4,3);

  // menampilkan volume
  echo "Volume kubus = ".
       $k->hitungVolume() . "<br/>";
  echo "Volume balok = ".
       $b->hitungVolume();
?>

</body>
</html>
