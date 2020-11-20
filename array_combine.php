<html>
<head>
   <title>Menggabung Array</title>
</head>
<body>

<?php

function judul() {
  echo "<h2>Demo menggunakan fungsi array_combine()</h2>";
}

judul();

$a = ["B", "F", "D"];
$b = ["Jakarta","Bogor","Bandung"];

echo "Array \$a:<br />";
print_r($a);

echo "<br /><br />Array \$b:<br />";
print_r($b);

// menggabung array $a dan $b
$c = array_combine($a, $b);

echo "<br /><br />Hasil penggabungan:<br />";
print_r($c);

?>

</body>
</html>
