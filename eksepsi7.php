<?php

class NegativeValueException extends Exception {
  public function __construct() {
    $this->message = "ERROR: Nilai tidak boleh negatif";
  }
}

if (isset($_POST["btnSubmit"])) {
  try {
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    
    if ($panjang < 0 || $lebar < 0) {
      throw new NegativeValueException();
    }  
  
    $luas = $panjang * $lebar;        
    echo "Luas persegi panjang = " . $luas;
    
  } catch (NegativeValueException $e) {
    echo $e->getMessage();
  }
}

?>
