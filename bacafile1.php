<html>
<head>
   <title>Membaca File</title>
</head>
<body>
<h2>Demo membaca file (Bagian 1)</h2>

<?php
$file = "c:\\Apache24\\htdocs\\modul-php\\contoh.txt";
$fp = fopen($file, "r");

echo "Isi file $file adalah:<br />";
while (!feof($fp)) {
   $baris = fgets($fp, 1024);
   echo "<strong>$baris</strong><br />";
}
fclose($fp);
?>

</body>
</html>
