<html>
<head>
   <title>Mendapatkan Ukuran Array</title>
</head>
<body>

<?php

function judul() {
  echo "<h2>Demo sizeof() dan count()</h2>";
}

judul();

$a = ["Jakarta","Bogor","Bandung"];

echo "Array \$a: ";
print_r($a);

echo "<br />";
echo "sizeof(\$a): " . sizeof($a) . "<br />";
echo "count(\$a): " . count($a) . "<br /><br />";

echo "Isi \$a:<br />";
for ($i=0; $i<sizeof($a); $i++) {
   echo "<strong>" . $a[$i] . "</strong><br />";
}

?>

</body>
</html>
