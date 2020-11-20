<?php

define("__ERROR__", "ERROR: Nilai di luar rentang yang ditentukan.");

if (isset($_POST["btnSubmit"])) {
  $uts = $_POST["uts"];  
  if ($uts < 0 || $uts > 100) {
    throw new DomainException(__ERROR__);
  }
  
  $uas = $_POST["uas"];
  if ($uas < 0 || $uas > 100) {
    throw new DomainException(__ERROR__);
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
  
}

?>