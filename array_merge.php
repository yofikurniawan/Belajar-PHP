<html>
<head>
   <title>Menggabung Array</title>
</head>
<body>

<?php

function judul() {
  echo "<h2>Demo menggabung dua buah array</h2>";
}

judul();

$a = [1=>10, 2=>20, 3=>30];
$b = [1=>100, 2=>200, 3=>300, 4=>400, 5=>500];

echo "Array \$a:<br />";
print_r($a);

echo "<br /><br />Array \$b:<br />";
print_r($b);

// menggabung array $a dan $b
$c = array_merge($a, $b);

echo "<br /><br />Hasil penggabungan:<br />";
print_r($c);

?>

</body>
</html>
