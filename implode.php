<html>
<head>
   <title>Fungsi implode()</title>
</head>
<body>
<h2>Demo menggabung elemen array menjadi string</h2>

<?php

// array yang akan digabung elemen-elemennya
$a = ["PHP", "Perl", "Python", "Ruby", "LISP"];

echo "\$a: ";
print_r($a);
echo "<br /><br />";

// memecah elemen-elemen array menjadi string
$str1 = implode(' ', $a);   // pembatas berupa spasi
$str2 = implode(';', $a);   // pembatas berupa titik koma

echo "\$str1: '" . $str1 . "'<br />";
echo "\$str2: '" . $str2 . "'";

?>

</body>
</html>