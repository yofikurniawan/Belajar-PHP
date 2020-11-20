<html>
<head>
   <title>Array sebagai Nilai Balik</title>
</head>
<body>
<h2>Demo fungsi yang mengembalikan array</h2>

<?php

function hitung($a, $b) {
   return ['tambah'=>$a+$b, 
           'kurang'=>$a-$b,
           'kali'=>$a*$b,
           'bagi'=>$a/$b];
}

$a = 15;
$b = 4;

echo "\$a = $a<br />";
echo "\$b = $b<br /><br />";

// memanggil fungsi hitung()
$hasil = hitung(15,4);

echo "\$a + \$b = " . $hasil['tambah'] . "<br />";
echo "\$a - \$b = " . $hasil['kurang'] . "<br />";
echo "\$a * \$b = " . $hasil['kali'] . "<br />";
echo "\$a / \$b = " . $hasil['bagi'];

?>
</body>
</html>
