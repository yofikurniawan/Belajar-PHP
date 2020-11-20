<html>
<head>
   <title>Polimorfisme</title>
</head>
<body>
<h2>Demo polimorfisme</h2>

<?php
  abstract class TigaDimensi {        
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

  // membuat kelas turunan
  class Bola extends TigaDimensi {
    const PI = 3.14;
    private $jarijari;
    public function __construct($r) {
      $this->jarijari = $r;
    }
    // implementasi hitungVolume()
    public function hitungVolume() {
      return (4 * self::PI * 
              pow($this->jarijari,3))/3;
    }
  }

  // membuat fungsi dengan parameter
  // bersifat polimorfik
  function tampilkanVolume(TigaDimensi $objek,
                           $namaobjek) {
    echo "Volume $namaobjek = " . 
         $objek->hitungVolume() . 
         "<br/>";
  }

  // membuat objek dari kelas Kubus
  $obj1 = new Kubus(3);
  tampilkanVolume($obj1, "Kubus");

  // membuat objek dari kelas Balok
  $obj2 = new Balok(5,4,3);
  tampilkanVolume($obj2, "Balok");

  // membuat objek dari kelas Balok
  $obj3 = new Bola(2);
  tampilkanVolume($obj3, "Bola");
?>

</body>
</html>
