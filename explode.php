<html>
<head>
   <title>Fungsi explode()</title>
</head>
<body>
<h2>Demo memecah string</h2>

<?php

$str = "PHP Perl Python Ruby LISP";

echo "Sebelum dipecah:<br />";
echo "\$str: " . $str . "<br /><br />";

// memecah string dengan spasi sebagai karakter pembatas
$daftarString = explode(' ', $str);

echo "Setelah dipecah:<br />";

foreach($daftarString as $s) {
   echo $s . "<br />";
}

?>

</body>
</html>