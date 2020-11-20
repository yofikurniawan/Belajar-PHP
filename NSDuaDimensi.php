<?php
namespace NSDuaDimensi;

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

?>