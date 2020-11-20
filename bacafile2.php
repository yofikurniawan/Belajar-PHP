<html>
<head>
   <title>Membaca File</title>
</head>
<body>
<h2>Demo membaca file (Bagian 2)</h2>

<?php
$file = "c:\\Apache24\\htdocs\\modul-php\\contoh.txt";
$fp = fopen($file, "r");

echo "Isi file $file adalah:<br />";
while (!feof($fp)) {
   $pecahandata = fread($fp, 30);
   echo "<strong>$pecahandata</strong><br />";
}
fclose($fp);
?>

</body>
</html>
