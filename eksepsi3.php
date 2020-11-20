<html>
<head>
   <title>Eksepsi</title>
</head>
<body>
<h2>Demo memahami cara kerja blok try-catch</h2>

<?php

define("__ERROR__","ERROR: parameter harus bertipe numerik");

function kali($a, $b) {
  if (!is_numeric($a) || !is_numeric($b)) {
     throw new UnexpectedValueException(__ERROR__);
  }
  return $a * $b;
}

echo "<strong>Kemungkinan I (keadaan normal):</strong><br />";

try {
  $a = kali(10,8);
  echo "Hasil kali: " . $a . "<br /><br />";
} catch (UnexpectedValueException $e) {
  echo $e->getMessage();  // tidak akan dieksekusi
}

echo "<strong>Kemungkinan II (terjadi eksepsi):</strong><br />";

try {
  $a = kali(10,"PHP");
  echo "Hasil kali: " . $a;   // tidak akan dieksekusi
} catch (UnexpectedValueException $e) {
  echo $e->getMessage();
}


?>

</body>
</html>
