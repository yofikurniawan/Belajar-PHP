<?php

define("__DOMAIN_ERROR__", "ERROR: Nilai di luar rentang yang ditentukan.");
define("__TYPE_ERROR__", "ERROR: Nilai harus bertipe numerik.");

if (isset($_POST["btnSubmit"])) {
  try {
    $uts = $_POST["uts"];  
    if ($uts < 0 || $uts > 100) {
      throw new DomainException(__DOMAIN_ERROR__);
    }
  
    $uas = $_POST["uas"];
    if ($uas < 0 || $uas > 100) {
      throw new DomainException(__DOMAIN_ERROR__);
    }
    
    if (!is_numeric($uts) || !is_numeric($uas)) {
      throw new UnexpectedValueException(__TYPE_ERROR__);
    }
  
    $nilai = (0.4 * $uts) + (0.6 * $uas);
  
    if ($nilai >= 80) $indeks = 'A';
    elseif ($nilai >= 70) $indeks = 'B';
    elseif ($nilai >= 60) $indeks = 'C';
    elseif ($nilai >= 40) $indeks = 'D';
    else $indeks = 'E';
  
    echo "<strong>Hasil ujian</strong><br /><br />";
    echo "Nilai akhir: " . $nilai . "<br />";
    echo "Nilai indeks: " . $indeks;
  } catch (DomainException $e) {
    echo $e->getMessage();
  } catch (UnexpectedValueException $e) {
    echo $e->getMessage();
  }
}

?>
