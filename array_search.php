<html>
<head>
   <title>Mencari Elemen Array</title>
</head>
<body>

<?php

function judul() {
  echo "<h2>Demo menggunakan fungsi array_search()</h2>";
}

judul();

$a = [10,20,30,40,50];

echo "Array \$a: ";
print_r($a);

echo "<br /><br />";
echo "array_search(30, \$a): " . array_search(30,$a) . "<br />";
echo "array_search(\"30\", \$a): " . array_search("30",$a) . "<br />";
echo "array_search(\"30\", \$a, true): " . array_search("30",$a,true);

?>

</body>
</html>
