<html>
<head>
   <title>Trait</title>
</head>
<body>
<h2>Demo trait</h2>

<?php
  trait LayarBrowser {            
    public function cetakString($str) {
       echo $str;
    }
  }

  class Kubus {    
    private $sisi;
    public function __construct($sisi) {
      $this->sisi = $sisi;
    }
    
    // menyisipkan fungsi cetakString() milik trait LayarBrowser
    use LayarBrowser;
    
    public function hitungVolume() {
      return $this->sisi * 
             $this->sisi *
             $this->sisi;
    }
    
    public function cetakVolume() {
      // memanggil fungsi cetakString() milik trait LayarBrowser
      // yang seakan-akan sekarang menjadi milik kelas Kubus
      $this->cetakString("Volume kubus = " . $this->hitungVolume());
    }    
  }
  
  // membuat objek dari kelas Kubus
  $obj = new Kubus(3);
  
  // memanggil metode cetakVolume()
  $obj->cetakVolume();
?>

</body>
</html>
