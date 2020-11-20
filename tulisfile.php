<html>
<head>
   <title>Menulis File</title>
</head>
<body>
<h2>Demo menulis dan menambah data ke dalam file</h2>

<?php
$file = "c:\\Apache24\\htdocs\\modul-php\\contoh1.txt";

echo "<p>Menulis data ke $file...</p>";
$fp = fopen($file, "w");
fwrite($fp, "Data yang ditulis ke dalam file.\n");
fclose($fp);

echo "<p>Menambah data ke $file...</p>";
$fp = fopen($file, "a");
fputs($fp, "Data yang ditambah ke dalam file.\n");
fclose($fp);

echo "Isi file $file adalah:<br />";
$fp = fopen($file, "r");
while (!feof($fp)) {
   $baris = fgets($fp, 1024);
   echo "<strong>$baris</strong><br />";
}
fclose($fp);

?>

</body>
</html>
