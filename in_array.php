<html>
<head>
   <title>Mencari Elemen Array</title>
</head>
<body>

<?php

function judul() {
  echo "<h2>Demo menggunakan fungsi in_array()</h2>";
}

judul();

$a = [10,20,30,40,50];

echo "Array \$a: ";
print_r($a);

echo "<br /><br />";
echo "in_array(30, \$a): " . in_array(30,$a) . "<br />";
echo "in_array(\"30\", \$a): " . in_array("30",$a) . "<br />";
echo "in_array(\"30\", \$a, true): " . in_array("30",$a,true);

?>

</body>
</html>
