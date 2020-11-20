<html>
<head>
   <title>Parameter Default</title>
</head>
<body>
<h2>Demo parameter opsional (default)</h2>

<?php

function increment(&$nilai, $d=1) {
   $nilai += $d;
}

$a = 10;
$b = 10;

echo "Sebelum proses increment:<br />";
echo "\$a = $a<br />";
echo "\$b = $b<br /><br />";

echo "Memanggil fungsi increment():<br />";

echo "increment(\$a);<br />";
// memanggil fungsi increment() tanpa parameter kedua
increment($a);

echo "increment(\$b, 5);<br /><br />";
// memanggil fungsi increment() dengan parameter kedua
increment($b, 5);

echo "Setelah proses increment:<br />";
echo "\$a = $a<br />";
echo "\$b = $b<br /><br />";

?>
</body>
</html>
