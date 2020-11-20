<?php
namespace NSBangun\NSDuaDimensi;    // namespace pertama

define('PI', 3.14);

class Segiempat {
  private $panjang;
  private $lebar;
  
  public function __construct($p, $l) {
    $this->panjang = $p;
    $this->lebar = $l;
  }
  
  public function setPanjang($p) {
    $this->panjang = $p;
  }
  
  public function setLebar($l) {
    $this->lebar = $l;
  }
  
  public function hitungLuas() {
    return $this->panjang * $this->lebar;
  }  
}

class Segitiga {
  private $alas;
  private $tinggi;
  
  public function __construct($a, $t) {
    $this->alas = $a;
    $this->tinggi = $t;
  }
  
  public function setAlas($a) {
    $this->alas = $a;
  }
  
  public function setTinggi($t) {
    $this->tinggi = $t;
  }
  
  public function hitungLuas() {
    return ($this->alas * $this->tinggi) / 2;
  }
}

class Lingkaran {
  private $radius;
  
  public function __construct($r) {
    $this->radius = $r;
  }
  
  public function setRadius($r) {
    $this->radius = $r;
  }
  
  public function hitungLuas() {
    return PI * $this->radius * $this->radius;
  }
}

namespace NSBangun\NSTigaDimensi;    // namespace kedua

class Kubus {
  private $sisi;
  
  public function __construct($s) {
    $this->sisi = $s;
  }
  
  public function setSisi($s) {
    $this->panjang = $s;
  }
  
  public function hitungVolume() {
    return $this->sisi * $this->sisi;
  }  
}

class Balok {
  private $panjang;
  private $lebar;
  private $tinggi;
  
  public function __construct($p, $l, $t) {
    $this->panjang = $p;
    $this->lebar = $l;
    $this->tinggi = $t;
  }
  
  public function setPanjang($p) {
    $this->panjang = $p;
  }
  
  public function setLebar($l) {
    $this->lebar = $l;
  }
  
  public function setTinggi($t) {
    $this->tinggi = $t;
  }
  
  public function hitungVolume() {
    return $this->panjang * $this->lebar * $this->tinggi;
  }
}

class Bola {
  private $radius;
  
  public function __construct($r) {
    $this->radius = $r;
  }
  
  public function setRadius($r) {
    $this->radius = $r;
  }
  
  public function hitungVolume() {
    return (4/3) * PI * pow($this->radius,3);
  }
}

?>