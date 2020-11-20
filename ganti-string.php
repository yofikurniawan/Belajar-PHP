<html>
<head>
   <title>Fungsi str_replace()</title>
</head>
<body>
<h2>Demo mengganti substring di dalam string</h2>

<?php

$str = "Python itu bagus. Python itu menarik. Python itu menyenangkan";

echo "Sebelum diganti:<br />";
echo $str . "<br /><br />";

// mengganti substring "Python" dengan "PHP"
$str1 = str_replace("Python", "PHP", $str, $n);

echo "Setelah diganti:<br />";
echo $str1 . "<br /><br />";

echo "Jumlah pergantian yang telah dilakukan: " . $n;

?>

</body>
</html>