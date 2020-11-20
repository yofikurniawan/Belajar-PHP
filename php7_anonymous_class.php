<?php
  declare(strict_types=1);
?>
<html>
<head>
   <title>Fitur PHP 7</title>
</head>
<body>
<h2>Demo menggunakan <em>anonymous class</em></h2>

<?php

// mendefinisikan interface DuaDimensi
interface DuaDimensi {
  public function luas(): float;
  public function keliling(): float;
}

// mendefinisikan kelas DemoApp
class DemoApp {
  private $objek;
  // metode dengan parameter bertipe interface
  public function setObjek(DuaDimensi $objek) {
    $this->objek = $objek;
  }
  public function getObjek() {
    return $this->objek;
  }
}

// membuat objek dari kelas DemoApp
$aplikasi = new DemoApp();

// membuat objek dari kelas tanpa nama
// yang mengimplementasikan interface DuaDimensi
$aplikasi->setObjek(
  new class implements DuaDimensi {
    private $panjang;
    private $lebar;
    
    public function setNilai($panjang, $lebar) {
      $this->panjang = $panjang;
      $this->lebar = $lebar;
    }
    
    // mengimplementasikan DuaDimensi::luas()
    public function luas(): float {
      return $this->panjang * $this->lebar;
    }
    
    // mengimplementasikan DuaDimensi::keliling()
    public function keliling(): float {
      return 2 * ($this->panjang + $this->lebar);
    }    
  }
);

// menentukan nilai panjang dan lebar
$aplikasi->getObjek()->setNilai(10.8, 8.0);

echo "Luas persegi panjang = " . $aplikasi->getObjek()->luas();
echo "<br />";
echo "Keliling persegi panjang = " . $aplikasi->getObjek()->keliling();

?>

</body>
</html>
