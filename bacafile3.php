<html>
<head>
   <title>Membaca File</title>
</head>
<body>
<h2>Demo membaca file (Bagian 3)</h2>

<?php
$file = "c:\\Apache24\\htdocs\\modul-php\\contoh.txt";
$fp = fopen($file, "r");

echo "Isi file $file adalah:<br />";
while (!feof($fp)) {
   $karakter = fgetc($fp);
   echo "<strong>$karakter</strong>";
}
fclose($fp);
?>

</body>
</html>
