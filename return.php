<html>
<head>
   <title>Statemen return</title>
</head>
<body>
<h3>Demo mengggunakan return</h3>

<?php
// mendefinisikan fungsi
function kali($a, $b) {    // BARIS A
   $c = $a * $b;
   return $c;
}

$hasil = kali(10, 6);   // BARIS B
echo "10 x 6 = " . $hasil;

?>

</body>
</html>
