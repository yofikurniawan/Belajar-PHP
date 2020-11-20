<html>
<head>
   <title>Interface</title>
</head>
<body>
<h2>Demo interface</h2>

<?php
  interface TigaDimensi {
    // tidak perlu menggunakan 
    // kata kunci abstract        
    public function hitungVolume();
  }

  class Kubus implements TigaDimensi {    
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

  class Balok implements TigaDimensi {
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

  class Bola implements TigaDimensi {
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
