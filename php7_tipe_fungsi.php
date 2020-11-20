<?php
  declare(strict_types=1);
?>
<html>
<head>
   <title>Fitur PHP 7</title>
</head>
<body>
<h2>Demo menentukan tipe kembalian fungsi</h2>

<?php

function bagi(float $a, float $b): float {
  return $a / $b;
}

function sambungString(string $s1, string $s2): string {
  return $s1 . $s2;
}

echo "10/3 = " . bagi(10.0, 3.0) . "<br />";
echo sambungString("PHP 7", " dan Python 3");
                 
?>

</body>
</html>
